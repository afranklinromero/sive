<?php

use App\Precioproducto;
use Illuminate\Database\Seeder;

class PrecioproductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Precioproducto::class, 100)->create();
    }
}
