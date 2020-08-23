<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "cliente";
    protected $primaryKey = "ID_CLIENTE";
    public $timestamps = false;
    
    public function usuarios(){
        return $this->belongsTo('App\Usuario', 'ID_USUARIO');
    }
}

