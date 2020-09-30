<?php

use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        //
        'cinit' => $faker->numberBetween(4000000, 7799999),
        'nombres' => $faker->name,
        'apellidos' => $faker->lastName,
        //'email' => $faker->email,
        'telefono' => $faker->numberBetween(60000000, 77799999),
        'direccion' => $faker->address,
        'estado' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
