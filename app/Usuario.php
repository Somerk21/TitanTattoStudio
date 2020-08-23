<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuario";
    protected $primaryKey = "ID_USUARIO";
    public $timestamps = false;

    public function clientes(){
        return $this->hasMany('App\Cliente', 'ID_USUARIO_FK');
    }

}