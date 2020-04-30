<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'ruc' => $faker->unique()->numberBetween($min = 600000, $max = 5000000),
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->unique()->phoneNumber,
        
    ];
});
