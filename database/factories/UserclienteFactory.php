<?php

use App\Cliente;
use App\User;
use App\Usercliente;
use Faker\Generator as Faker;

$factory->define(Usercliente::class, function (Faker $faker) {
    return [
        //
        'user_id' => User::all('id')->random(),
        'cliente_id' => Cliente::all('id')->random(),
        'estado' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
