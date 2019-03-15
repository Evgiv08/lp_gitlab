<?php

use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
    Charity Factory
|--------------------------------------------------------------------------
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Charity::class, function (Faker\Generator $faker) {
    return [
        'client_id' => 1,
        'full_name' => $faker->unique()->name,
        'phone' => $faker->unique()->phoneNumber,
        'locality' => $faker->unique()->city,
        'address' => $faker->unique()->address,
        'birth_date' => $faker->dateTimeBetween('-50 years', '-1 year'),
        'purpose' => $faker->unique()->text(150),
        'about' => $faker->unique()->text(500),
        'category_id' => $faker->numberBetween(1,4),
        'sum' => $faker->numberBetween(100000,1000),
        'start_date' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
        'slug' => $faker->numberBetween(10000,40000),
        'status_id' => $faker->numberBetween(1,3),
        'created_at' => Carbon::now()
//        'term' => $faker->numberBetween(14,86),
//        'finish_date' => $faker->dateTimeThisYear($max = '2019-11-27 20:52:14', $timezone = null),
    ];
});
