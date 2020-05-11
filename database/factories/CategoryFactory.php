<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {

    return [
        'name' => $faker->name(),
        'order' => $faker->numberBetween(0, 10),
        'type' => 'food'//$faker->word()

    ];
});
