<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name'     => 'Adam',
            'surname'  => 'Smith',
            'email'    => 'adam@smith.com',
            'password' => bcrypt(__('app.default')),
        ]);
    }
}
