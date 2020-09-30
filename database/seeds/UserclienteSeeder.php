<?php

use App\Usercliente;
use Illuminate\Database\Seeder;

class UserclienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        for ($i=1; $i <= 7; $i++) { 
            $usercliente = new Usercliente();
            $usercliente->user_id =$i ;
            $usercliente->cliente_id = $i;
            $usercliente->created_at = now();
            $usercliente->updated_at = now();
            $usercliente->estado = 1;
            $usercliente->save();
        }
        //
        

    }
}
