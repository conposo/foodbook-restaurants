<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RestaurantTableSeeder extends Seeder
{

    public function transliterate($text)
    {

        $cyr = [
            'а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п',
            'р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',
            'А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П',
            'Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я', ' '
        ];
        $lat = [
            'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p',
            'r','s','t','u','f','h','ts','ch','sh','sht','a','i','y','e','yu','ya',
            'A','B','V','G','D','E','Io','Zh','Z','I','Y','K','L','M','N','O','P',
            'R','S','T','U','F','H','Ts','Ch','Sh','Sht','A','I','Y','e','Yu','Ya', '-'
        ];

        return str_replace($cyr, $lat, $text);
        // return $text;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        include('restaurants_data-SOFIA.php');
        // include('restaurants_data-PLOVDIV.php');
        // include('restaurants_data-VARNA.php');
        // include('restaurants_data-BURGAS.php');
        // include('restaurants_data-RUSE.php');
        
        // include('restaurants_data_test.php');
        // include('broken_restaurants.php');

        // include('restaurants_data.php');
        // include('restaurants_data_goguide.php');

        $count = 1;
        foreach($restaurants as $restaurant)
        {
            if( !isset($restaurant['worktime']) || $restaurant['worktime'] == '' )
                $restaurant['worktime'] = '{"friday": {"to": {"hours": "22","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "22","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "22","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "22","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "22","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "22","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "22","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}';

            DB::table('restaurants')->insert([
                'creator_id' => 1,
                'slug' => $this->transliterate($restaurant['slug']),
                'business_name' => $restaurant['business_name'],
                'worktime' => $restaurant['worktime'],
                'city' => $restaurant['city'],
                'region' => $restaurant['region'],
                'postal_code' => $restaurant['postal_code'],
                'address' => $restaurant['address'],
                'address_additional' => $restaurant['address_additional'],
                'lat' => $restaurant['coords_x'],
                'lng' => $restaurant['coords_y'],
                'phone' => $restaurant['phone'],
                'email' => $restaurant['email'],
                'website' => $restaurant['website'],
                'fb_page' => $restaurant['fb_page'],
                'category' => $restaurant['category'],
                'cuisine' => $restaurant['cuisine'],
                'description' => $restaurant['description'],
                'created_at' => $restaurant['created_at'],
            ]);
            
            if( !is_null($restaurant['dishes_ids']) )
            {
                $menu = json_decode($restaurant['dishes_ids'], true);
                // var_dump($menu);
                // exit;
                if($menu)
                {
                    foreach($menu as $category_slug => $dish_items)
                    {
                        foreach($dish_items as $dish)
                        {
                            DB::table('menus')->insert([
                                'restaurant_id' => $count,
                                'category_slug' => $category_slug,
                                'dish_id' => is_numeric($dish[0]) ? $dish[0] : null,
                                'dish_slug' => $dish[1],
                                // 'dish_slug' => strtolower( $this->transliterate($dish[2]) ), 
                                'dish_name' => $dish[2],
                                'dish_price' => str_replace(',', '.', $dish[3]),
                                'dish_weight' => ( isset($dish[4]) && is_numeric($dish[4]) ) ? $dish[4] : 0,
                                'dish_image_url' => isset($dish[5]) ? $dish[5] : '',
                                'created_at' => Carbon::now()
                            ]);
                        }
                    }
                }
            }
            $count++;
        }
    }
}
