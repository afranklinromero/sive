<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usercliente extends Model
{
    //
    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
