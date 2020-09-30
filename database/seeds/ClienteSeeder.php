<?php

use App\Cliente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clientes')->insert(['cinit'=>'4725253', 'nombres'=>'Alfredo.','apellidos'=>'Montoya Calderon','telefono'=>'789456126', 'direccion'=>'Plan 4000', 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        factory(Cliente::class, 9)->create();
    }
}
