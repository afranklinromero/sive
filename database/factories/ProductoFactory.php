<?php

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        //
        'nombre' => $faker->name,
        'preciocompra' => $faker->numberBetween(100,200),
        'estado' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
