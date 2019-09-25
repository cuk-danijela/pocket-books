<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'author' => $faker->name,
        'year' => $faker->year,
        'image' => $faker->imageUrl
    ];
});
