<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "cliente";
    protected $primaryKey = "Id_Cliente";
    public $timestamps = false;
    
    public function usuarios(){
        return $this->belongsTo('App\Usuario', 'Id_Usuario');
    }
}

