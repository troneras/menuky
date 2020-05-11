<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'online' => $faker->boolean,
        'total' => $faker->numberBetween(0, 10000),
        'status' => $faker->numberBetween(0, 4), // pendiente, aceptado, cocinando, preparando envío, enviado
        //
    ];
});
