<?php

use App\Producto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //factory(Producto::class, 100)->create();
        DB::table('productos')->insert(['nombre'=>'Arena viva.','preciocompra'=>107, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Arena viva repasada.','preciocompra'=>198, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Arena corriente.','preciocompra'=>123, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Arena corriente de segunda.','preciocompra'=>137, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Arena mezclada.','preciocompra'=>108, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Arena mezclada repasada.','preciocompra'=>122, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Zahorra.','preciocompra'=>105, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Zahorra fina.','preciocompra'=>189, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Zahorra reciclada.','preciocompra'=>109, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Planche lavado.','preciocompra'=>162, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Gravoset lavado.,','preciocompra'=>136, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Arena blanca.','preciocompra'=>144, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Arena lavada.','preciocompra'=>167, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Tierra vegetal normal.','preciocompra'=>134, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Tierra vegetal garbillada.','preciocompra'=>155, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Hormigon','preciocompra'=>124, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Ladrillos.','preciocompra'=>171, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Bloques.','preciocompra'=>197, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Rasillas.','preciocompra'=>124, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Bardos.','preciocompra'=>106, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Sacos de cemento.','preciocompra'=>178, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Sacos de yeso.','preciocompra'=>117, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Sacos de cal.','preciocompra'=>194, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Todo tipo de contenedores de obra.','preciocompra'=>110, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Transporte','preciocompra'=>191, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Flota de camiones de transporte.','preciocompra'=>117, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);
        DB::table('productos')->insert(['nombre'=>'Reparacion','preciocompra'=>113, 'created_at'=>now(), 'updated_at'=>now(), 'estado'=>1]);




        
    }
}
