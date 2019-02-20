<?php

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
            'name'     => 'Admin',
            'email'    => 'admin@admin.com',
            'password' => bcrypt(__('app.default')),
            'role'     => __('app.Admin'),
        ]);
    }
}
