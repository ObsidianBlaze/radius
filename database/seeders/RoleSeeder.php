<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Making the seeders.
        DB::table('roles')->insert([
            ['name' => "user",'created_at' => Carbon::now()],
            ['name' => "admin",'created_at' => Carbon::now()],
        ]);

    }
}
