<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Restaurant;
use App\Categories;
use App\Traits\ApiResponser;

class CategoryController extends Controller
{
    use ApiResponser;

    public function store(Request $request, $restaurant_id)
    {
        $restaurant = Restaurant::findOrFail($restaurant_id);
        foreach($request->all() as $category => $name)
        {
            $categories[] = Categories::create([
                'restaurant_id' => $restaurant->id,
                'category' => strtolower($category),
                'en_name' => $name,
                'bg_name' => $name,
                ]);
        }

        return $this->successResponse($categories, Response::HTTP_CREATED);
    }

    public function destroy(Request $request, $restaurant_id)
    {
        $restaurant = Restaurant::findOrFail($restaurant_id);

        $category = Categories::where([
            ['restaurant_id', '=', $restaurant->id],
            ['category', '=', mb_strtolower($request['category'])]
        ])->get();

        if($category)
        {
            $category->first()->delete();
        }

        $categories = Categories::all();
        return $this->successResponse($categories, Response::HTTP_OK);
    }
    
    public function update(Request $request, $slug_or_id)
    {
        //
    }

}
