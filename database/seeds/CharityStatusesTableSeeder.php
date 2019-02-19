<?php

use Illuminate\Database\Seeder;

class CharityStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('charity_statuses')->insert([
            ['id' => 1, 'status' => 'draft'],
            ['id' => 2, 'status' => 'active'],
            ['id' => 3, 'status' => 'done'],
            ['id' => 4, 'status' => 'ban']
        ]);
    }
}
