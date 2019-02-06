<?php

use Illuminate\Database\Seeder;

class CharitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 30 test charity
        factory(\App\Charity::class, 30)->create();
    }
}
