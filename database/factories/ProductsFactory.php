<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'author' => $faker->name,
        'description' => $faker->sentence,
        'year' => $faker->year
    ];
});
