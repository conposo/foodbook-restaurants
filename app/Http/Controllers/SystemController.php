<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use App\Traits\ApiResponser;

class SystemController extends Controller
{
    use ApiResponser;

    public function allrestaurants()
    {
        $restaurant = \App\Restaurant::with('staff', 'categories')->get();
        return $this->successResponse($restaurant, Response::HTTP_OK);
    }

    public function allstaffs()
    {
        $restaurant = \App\Staff::all();
        return $this->successResponse($restaurant, Response::HTTP_OK);
    }

    public function categories()
    {
        $restaurants = \App\Categories::all();
        return $this->successResponse($restaurants, Response::HTTP_OK);
    }
    
    public function restaurantCategories($slug_or_id)
    {
        if(is_numeric($slug_or_id))
            $restaurant = \App\Restaurant::findOrFail($slug_or_id);
        else
        {
            $restaurant = \App\Restaurant::where('slug', $slug_or_id)->first();            
        }
        $categories = $restaurant->categories;
        return $this->successResponse($categories, Response::HTTP_OK);
    }
    
    public function restaurantRegions($slug_or_id)
    {
        if(is_numeric($slug_or_id))
            $restaurant = \App\Restaurant::findOrFail($slug_or_id);
        else
        {
            $restaurant = \App\Restaurant::where('slug', $slug_or_id)->first();            
        }
        $regions = $restaurant->regions;
        return $this->successResponse($regions, Response::HTTP_OK);
    }

    public function restaurantsArea(Request $request)
    {
        // $lat = $request->lat;
        // $long = $request->long;
        // $distance = $request->distance;
        
        $center_lat = $request->lat;
        $center_lng = $request->lng;
        $radius = $request->radius;
        
        $restaurants = DB::table('restaurants')
            ->select('id', 'business_name', 'city', 'address', 'lat', 'lng', DB::raw(
                '( 6371 * acos( cos( radians(\''.$center_lat.'\') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(\''.$center_lng.'\') ) + sin( radians(\''.$center_lat.'\') ) * sin( radians( lat ) ) ) ) as distance'
            ))
            ->orderBy('distance')
            ->havingRaw('distance < '.$radius)
            // ->take(3)
            ->get();
        
        return $this->successResponse($restaurants, Response::HTTP_OK);
    }

}
