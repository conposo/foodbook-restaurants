<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

use App\Staff;

use App\Traits\ApiResponser;

class RestaurantManageController extends Controller
{
    use ApiResponser;

    public function staff($restaurant_id)
    {
        $restaurant_staff = Staff::where('restaurant_id', $restaurant_id)->get();
        return $this->successResponse($restaurant_staff, Response::HTTP_OK);
    }    
}
