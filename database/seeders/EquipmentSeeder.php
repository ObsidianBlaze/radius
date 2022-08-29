<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Making the seeders.
        DB::table('equipments')->insert([
            ['name' => "Ladder",'created_at' => Carbon::now()],
            ['name' => "Shovel",'created_at' => Carbon::now()],
        ]);

    }
}
