<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Breed;
use Faker\Generator as Faker;

$factory->define(Breed::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
