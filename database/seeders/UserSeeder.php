<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Making the seeders.
        DB::table('users')->insert([
            ['name' => "James",'email' => "james@gmail.com",'created_at' => Carbon::now()],
            ['name' => "Daniel",'email' => "dan@gmail.com",'created_at' => Carbon::now()],
        ]);

    }
}
