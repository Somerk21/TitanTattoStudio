<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = "cita";
    protected $primaryKey = "ID_CITA";
    public $timestamps = false;

    public function empleados(){
        return $this->hasMany('App\Empleado', 'ID_EMPLEADO');
    }
    public function clientes(){
        return $this->hasMany('App\Cliente', 'ID_CLIENTE');
    }
    public function detalles(){
        return $this->hasMany('App\Detalle_Cita', 'ID_DETALLE');
    }
}
