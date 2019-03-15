<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['title' => 'Coronary heart disease', 'created_at' => Carbon::now()],
            ['title' => 'Coccidioidomycosis', 'created_at' => Carbon::now()],
            ['title' => 'Dehydration', 'created_at' => Carbon::now()],
            ['title' => 'Epilepsy', 'created_at' => Carbon::now()]
        ]);
    }
}
