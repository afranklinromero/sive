<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precioproducto extends Model
{
    //
    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function producto(){
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
