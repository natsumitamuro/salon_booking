<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\MemberSeeder;
use Database\Seeders\SalonSeeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Member::factory(100)->create();
        $this->call(SalonSeeder::class);        
    }
}
