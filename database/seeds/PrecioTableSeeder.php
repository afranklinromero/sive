<?php

use Illuminate\Database\Seeder;
use App\Precio;


class PrecioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $precios = new Precio();
        $precios->name = 'Churisao';
        $precios->viacha = ('43.1');
        $precios->yrojo = ('42.8');
        $precios->yazul = ('39.8');
        $precios->save();

        $precios = new Precio();
        $precios->name = 'Carlos Mamani';
        $precios->viacha = ('43.5');
        $precios->yrojo = ('43.1');
        $precios->yazul = ('41.1');
        $precios->save();
             
        $precios = new Precio();
        $precios->name = 'Jose Calderon';
        $precios->viacha = ('43.6');
        $precios->yrojo = ('43.0');
        $precios->yazul = ('41.2');
        $precios->save();
        

        $precios = new Precio();
        $precios->name = 'Jose Luis Alanoca';
        $precios->viacha = ('43.4');
        $precios->yrojo = ('43.1');
        $precios->yazul = ('41.2');
        $precios->save();
      
        $precios = new Precio();
        $precios->name = 'Bloquer';
        $precios->viacha = ('43.4');
        $precios->yrojo = ('41.3');
        $precios->yazul = ('43.6');
        $precios->save();
      

        $precios = new Precio();
        $precios->name = 'Erig Rojas';
        $precios->viacha = ('43.4');
        $precios->yrojo = ('43.6');
        $precios->yazul = ('41.3');
        $precios->save();
      

     

       
      
    }
}
