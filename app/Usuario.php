<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuario";
    protected $primaryKey = "Id_Usuario";
    public $timestamps = false;

    public function clientes(){
        return $this->hasMany('App\Cliente', 'ID_USUARIO_FK');
    }
    public function empleados(){
        return $this->hasMany('App\Empleado', 'ID_USUARIO_FK');
    }

}