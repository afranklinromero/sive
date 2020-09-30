<?php

use App\Cliente;
use App\Precioproducto;
use App\Producto;
use Faker\Generator as Faker;

$factory->define(Precioproducto::class, function (Faker $faker) {
    return [
        //
        'producto_id' => Producto::all('id')->random(),
        'cliente_id' => Cliente::all('id')->random(),
        'precio' => $faker->numberBetween(200, 1000),
        'estado' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
