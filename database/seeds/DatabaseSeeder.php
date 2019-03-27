<?php

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
        $this->call(RolesTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(CharityStatusesTableSeeder::class);
        // $this->call(CharitiesTableSeeder::class);
        // $this->call(ClientTableSeeder::class);
    }
}
