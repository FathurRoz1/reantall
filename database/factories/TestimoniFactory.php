<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Testimoni;
use Faker\Generator as Faker;

$factory->define(Testimoni::class, function (Faker $faker) {

    return [
        'IDCUST' => $faker->randomDigitNotNull,
        'TESTIMONI' => $faker->text,
        'STAR' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
