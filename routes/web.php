<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
/*
|--------------------------------------------------------------------------
| New Restaurant Web Routes
|--------------------------------------------------------------------------
*/

$router->post('newrestaurant', 'RestaurantController@newRestaurant');

/*
|--------------------------------------------------------------------------
| User Web Routes
|--------------------------------------------------------------------------
*/

$router->get('roles/{user_id}', 'StaffController@index');


/*
|--------------------------------------------------------------------------
| Static Web Routes
|--------------------------------------------------------------------------
*/

$router->get('restaurants_by_location', 'RestaurantController@restaurantsByLocation');

$router->get('getbyids', 'RestaurantController@getbyids');
$router->get('restaurant/{slug_or_id}', 'RestaurantController@index');
$router->get('restaurant/{restaurant_id}/staff', 'RestaurantManageController@staff');

/*
|--------------------------------------------------------------------------
| Restaurant Admin Web Routes
|--------------------------------------------------------------------------
*/

$router->patch('restaurant/{slug}', 'RestaurantController@update');

$router->post('restaurant/{restaurant_id}/staff', 'StaffController@add');
$router->delete('restaurant/{restaurant_id}/staff', 'StaffController@destroy');

$router->post('/{restaurant_id}/categories', 'CategoryController@store');
$router->delete('/{restaurant_id}/categories', 'CategoryController@destroy');

/*
|--------------------------------------------------------------------------
| Restaurant Admin Regions / Tables Routes
|--------------------------------------------------------------------------
|
*/

$router->post('{restaurant_id}/region', 'RegionsController@store');
$router->delete('region/{region_id}', 'RegionsController@destroy');

/*
|--------------------------------------------------------------------------
| Restaurant Menu Web Routes
|--------------------------------------------------------------------------
*/

$router->get('/{slug}/menu_items', 'RestaurantManageMenuController@index');
$router->post('/{slug}/menu_item', 'RestaurantManageMenuController@store');

$router->patch('menu_item/{id}', 'RestaurantManageMenuController@update');

$router->delete('/{id}', 'RestaurantManageMenuController@destroy');


/*
|--------------------------------------------------------------------------
| System Web Routes
|--------------------------------------------------------------------------
*/

$router->get('allrestaurants', 'SystemController@allrestaurants');
$router->get('allstaffs', 'SystemController@allstaffs');
$router->get('{restaurant_id}/regions', 'SystemController@restaurantRegions');
// $router->get('allregions', 'SystemController@allregions');
$router->get('/{slug}/categories', 'SystemController@restaurantCategories');
$router->get('/allcategories', 'SystemController@categories');

$router->get('restaurants_from_area', 'SystemController@restaurantsArea');
