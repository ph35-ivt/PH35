<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cat;
use Faker\Generator as Faker;
use App\Breed;

$factory->define(Cat::class, function (Faker $faker) {
    $listBreedID = Breed::pluck('id');
    // [1,2,3,4,5,6]
    return [
        'name' => $faker->name,
        'age' => rand(1,10),
        'breed_id' => $faker->randomElement($listBreedID)
    ];
});
