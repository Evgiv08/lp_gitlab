<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            'name'       => 'Admin',
            'email'      => 'admin@admin.com',
            'password'   => bcrypt(__('app.default')),
            'role_id'    => config('constants.admin'),
            'created_at' => Carbon::now(),
        ]);
    }
}
