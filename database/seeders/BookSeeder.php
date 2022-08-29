<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Making the seeders.
        DB::table('books')->insert([
            ['name' => "Things Fall Apart",'isbn' => "978-3-16-148410-0",'created_at' => Carbon::now()],
            ['name' => "Fire and Ice",'isbn' => "934-3-16-148410-0",'created_at' => Carbon::now()],
        ]);

    }
}
