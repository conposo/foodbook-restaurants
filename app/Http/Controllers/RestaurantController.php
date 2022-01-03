<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;

use App\Restaurant;
use App\Staff;

use App\Traits\ApiResponser;

class RestaurantController extends Controller
{
    use ApiResponser;
    
    public function index($slug_or_id)
    {
        // $slug = strtolower($slug);
        if (is_numeric($slug_or_id)) {
            $restaurant = Restaurant::where('id', $slug_or_id)->with('staff', 'categories', 'menu', 'regions')->first();
        } else {
            $restaurant = Restaurant::where('slug', urldecode($slug_or_id))->with('staff', 'categories', 'menu', 'regions')->first();
        }
        // dd( urldecode($slug), $restaurant );
        return $this->successResponse($restaurant, Response::HTTP_OK);
    }

    public function restaurantsByLocation(Request $request)
    {
        // ini_set('memory_limit', '-1');
        $latlng = explode('|', $request->latlng);
        $lat = $latlng[0];
        $lng = $latlng[1];

        $center_lat = $lat;
        $center_lng = $lng;
        $radius = $request->radius;
        
        $limit = -1;
        if($request->limit) $limit = $request->limit;
        
        $restaurants = DB::table('restaurants')
            ->select('id', DB::raw(
                '( 6371 * acos( cos( radians(\''.$center_lat.'\') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(\''.$center_lng.'\') ) + sin( radians(\''.$center_lat.'\') ) * sin( radians( lat ) ) ) ) as distance'
            ))
            ->orderBy('distance')
            ->havingRaw('distance < '.$radius)
            ->take($limit)
            ->get();

        if($request->return == 'data' || $request->return === null)
        {
            $restaurants_ids = $restaurants->pluck('id')->toArray();
            $restaurants = Restaurant::with('categories', 'menu', 'public_dishes')->find($restaurants_ids);
            $restaurants = Restaurant::find($restaurants_ids);
        }

        // if($request->return == 'ids')
        // {

        // }
        
        // , 'public_self_owned_dishes_in_menu'

        // dd( $restaurants = Restaurant::with('categories', 'menu')->find($restaurants_ids) );
        return $this->successResponse($restaurants, Response::HTTP_OK);
    }

    public function getbyids(Request $request)
    {
        ini_set('memory_limit', '2048M');
        $ids = explode(',', $request->ids);
        $restaurants = Restaurant::find($ids);
        // $restaurants = Restaurant::with('categories', 'menu')->find($ids);
        // if($request->city)
        // {
        //     $restaurants = $restaurants->where('city', $request->city);
        // }
        // dd($restaurants->toArray());
        return $this->successResponse($restaurants);
    }

    public function update(Request $request, $slug)
    {
        $restaurant = Restaurant::where('slug', $slug)->first();

        $restaurant->fill($request->all());
        if($restaurant->isClean())
        {
            return $this->errorResponse('At least one value must change', Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $restaurant->save();

        // dd($request->all(), $restaurant);

        return $this->successResponse($restaurant, Response::HTTP_OK);
    }

    public function newRestaurant(Request $request)
    {
        // $request['owner_type'] = $dish_type;
        $rules = [
            'slug' => 'required|min:3',
        ];
        // $this->validate($request, $rules);

        $new_restaurant = Restaurant::create($request->all());

        $staff['restaurant_id'] = $new_restaurant->id;
        $staff['user_id'] = $request->creator_id;
        $staff['type'] = 'OWNER';
        $new_staff_entry = Staff::create($staff);

        return $this->successResponse(['$new_restaurant' => $request->all()], Response::HTTP_CREATED);
    }
}
