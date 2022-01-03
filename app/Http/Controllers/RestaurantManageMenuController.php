<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Restaurant;
use App\Menu;
use App\PublicDishes;
use App\Traits\ApiResponser;

class RestaurantManageMenuController extends Controller
{
    use ApiResponser;

    public function __construct(Request $request)
    {
        // $this->restaurant = Restaurant::where('slug', mb_strtolower($request->slug))->first();
        $this->restaurant = Restaurant::where('slug', $request->slug)->first();
    }

    
    public function index($slug)
    {
        $menu_items = Menu::where('restaurant_id', $this->restaurant->id)->get()->toArray();
        return $this->successResponse($menu_items, Response::HTTP_OK);
    }


    public function store(Request $request, $slug)
    {
        $is_public = $request->is_public;
        $dish_type = $request->dish_type;
        $data = $request->except('dish_type');
        $data['restaurant_id'] = $this->restaurant->id;

        // $rules = [
        //     'category_slug' => 'min:3',
        //     'dish_id' => 'min:1',
        //     'dish_name' => 'min:3',
        //     'dish_price' => 'required|numeric|between:0.00,999.99',
        // ];
        // $this->validate($request, $rules);
        // dd($data);

        $new_item = new Menu;
        $new_item->fill($data);
        if($new_item->isClean())
        {
            return $this->errorResponse('At least one value must change', Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $new_item->save();

        // save also on the publicDish
        if( $is_public && $dish_type == 'B' )
        {
            $restaurant_id = $this->restaurant->id;
            $dish_id = $request->dish_id;
            $new_record = new PublicDishes;
            $new_record->fill([
                'restaurant_id' => $restaurant_id,
                'dish_id' => $dish_id,
            ]);
            $new_record->save();
        }
        
        return $this->successResponse($new_item);
    }

    public function update(Request $request, $item_id)
    {
        $item = Menu::findOrFail($item_id);
        if( !empty($request->all()) )
        {
            $item->fill($request->all());
            $item->save();
        }
        return $this->successResponse($item);
        return $this->successResponse($request->except('_token', '_method'));
    }

    public function destroy(Request $request, $item_id)
    {
        $item = Menu::findOrFail($item_id);
        $item->delete();

        $_item = PublicDishes::where([
            ['restaurant_id', $request->restaurant_id],
            ['dish_id', $request->dish_id],
        ])->first();
        $_item->delete();

        return $this->successResponse($item);

    }
}
