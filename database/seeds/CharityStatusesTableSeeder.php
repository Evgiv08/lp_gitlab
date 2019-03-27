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
            ['status' => 'draft'],
            ['status' => 'returned'],
            ['status' => 'active'],
            ['status' => 'done'],
            ['status' => 'ban']
        ]);
    }
}
