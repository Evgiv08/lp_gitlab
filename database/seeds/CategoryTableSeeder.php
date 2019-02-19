<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            ['id' => 1, 'title' => 'Coronary heart disease', 'created_at' => Carbon::now()],
            ['id' => 2, 'title' => 'Coccidioidomycosis', 'created_at' => Carbon::now()],
            ['id' => 3, 'title' => 'Dehydration', 'created_at' => Carbon::now()],
            ['id' => 4, 'title' => 'Epilepsy', 'created_at' => Carbon::now()]
        ]);
    }
}
