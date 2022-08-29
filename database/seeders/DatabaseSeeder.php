<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Calling the seeders
        $this->call(ActionSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(RoleSeeder::class);

    }
}
