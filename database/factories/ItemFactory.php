<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    $faker->addProvider(new \FakerRestaurant\Provider\es_PE\Restaurant($faker));
    return [
        'name' => $faker->beverageName(),
        'description' => $faker->text(160),
        'price' => $faker->numberBetween(0, 4000),
    ];
});
/**
 * // Generator
$faker->foodName();      // A random Food Name
$faker->beverageName();  // A random Beverage Name
$faker->dairyName();  // A random Dairy Name
$faker->vegetableName();  // A random Vegetable Name
$faker->fruitName();  // A random Fruit Name
$faker->meatName();  // A random Meat Name
$faker->sauceName();  // A random Sauce Name
 *
 *
 */