<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {

    return [
        'CUSTNAME' => $faker->word,
        'CUSTADDR' => $faker->word,
        'CUSTPHONE' => $faker->word,
        'CUSTEMAIL' => $faker->word,
        'CUSTIDENTITY' => $faker->word,
        'CUSTBIRTH' => $faker->word,
        'CUSTPICT' => $faker->word,
        'CUSTGENDER' => $faker->word,
        'CUSTCOMPANY' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
