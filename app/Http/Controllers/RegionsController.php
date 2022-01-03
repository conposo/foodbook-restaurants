<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Restaurant;
use App\Regions;
use App\Traits\ApiResponser;

class RegionsController extends Controller
{
    use ApiResponser;
    
    public function index($name)
    {
        $restaurant = Restaurant::where('slug', $name)->first();
        $regions = Regions::where('restaurant_id', $restaurant->id)->get();
        // dd($regions->toArray());
        return $this->successResponse($regions, Response::HTTP_OK);
    }

    public function store(Request $request, $slug_or_id)
    {
        // dd($request->all());
        if(is_numeric($slug_or_id))
            $restaurant = Restaurant::findOrFail($slug_or_id);
        else
            $restaurant = Restaurant::where('slug', $slug_or_id)->first();

        if($request->isMethod('post'))
        {
            $new_region = Regions::create([
                'restaurant_id' => $restaurant->id,
                'region' => strtolower($request->region),
                'tables' => $request->tables,
            ]);
        }

        return $this->successResponse($new_region, Response::HTTP_CREATED);
    }

    public function destroy($region_id)
    {
        $region = Regions::findOrFail($region_id);
        $region->delete();
        return $this->successResponse($region);
    }

}
