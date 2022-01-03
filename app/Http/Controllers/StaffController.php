<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Staff;

use App\Traits\ApiResponser;

class StaffController extends Controller
{
    use ApiResponser;

    public function index($user_id)
    {
        $user_roles = Staff::where('user_id', $user_id)->get();
        return $this->successResponse($user_roles, Response::HTTP_OK);
    }

    public function restaurantStaff($restaurant_id)
    {
        $restaurant_staff = Staff::where('restaurant_id', $restaurant_id)->get();
        return $this->successResponse($restaurant_staff, Response::HTTP_OK);
    }

    public function add(Request $request, $restaurant_id)
    {
        $request['restaurant_id'] = $restaurant_id;
        $new_staff_entry = Staff::create($request->all());

        return $this->successResponse($new_staff_entry, Response::HTTP_OK);
    }

    public function destroy(Request $request)
    {
        $staff_entry = Staff::where($request->all())->first();
        if($staff_entry)
        {
            $staff_entry->delete();
        }
        return $this->successResponse($staff_entry, Response::HTTP_OK);
    }
}
