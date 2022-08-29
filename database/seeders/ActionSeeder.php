<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;



class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Making the seeders.
        DB::table('actions')->insert([
            ['type' => "rented",'created_at' => Carbon::now()],
            ['type' => "returned",'created_at' => Carbon::now()],
            ['type' => "new",'created_at' => Carbon::now()]
        ]);
    }
}
