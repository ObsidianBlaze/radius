<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Making the seeders.
        DB::table('log_activities')->insert([
            ['actionId' => "1",'bookId' => "1", "userId" => "2",'created_at' => Carbon::create(2012, 4, 20, 0)],
            ['actionId' => "1",'bookId' => "2", "userId" => "1",'created_at' => Carbon::create(2012, 5, 14, 0)],
            ['actionId' => "2",'bookId' => "1", "userId" => "2",'created_at' => Carbon::create(2013, 1, 11, 0)],

        ]);

    }
}
