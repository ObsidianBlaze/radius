<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Making the seeders.
        DB::table('materials')->insert([
            ['name' => "book",'created_at' => Carbon::now()],
            ['name' => "equipment",'created_at' => Carbon::now()],
        ]);
    }
}
