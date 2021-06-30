<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Booking;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {

    return [
        'IDCUST' => $faker->randomDigitNotNull,
        'BOOKSTART' => $faker->word,
        'BOOKEND' => $faker->word,
        'BOOKDEST' => $faker->word,
        'BOOKPICK' => $faker->word,
        'BOOKTOTAL' => $faker->randomDigitNotNull,
        'BOOKSTATUS' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
