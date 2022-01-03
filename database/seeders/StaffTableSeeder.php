<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $staffs = [
        //     ['restaurant_id' => 1, 'user_id' => 1, 'type' => 'OWNER', 'created_at' => Carbon::now()],
        //     ['restaurant_id' => 2, 'user_id' => 1, 'type' => 'OWNER', 'created_at' => Carbon::now()],
        // ];

        // foreach($staffs as $staff)
        // {
        //     DB::table('staff')->insert($staff);
        // }

        for($i=1; $i < 1969; $i++)
        {
            DB::table('staff')->insert([
                'restaurant_id' => $i,
                'user_id' => 1,
                'type' => 'OWNER',
                'created_at' => Carbon::now()
            ]);
            DB::table('staff')->insert([
                'restaurant_id' => $i,
                'user_id' => 2,
                'type' => 'OWNER',
                'created_at' => Carbon::now()
            ]);
        }
    }
}
