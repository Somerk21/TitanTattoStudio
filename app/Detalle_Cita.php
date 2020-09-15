<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_Cita extends Model
{
    protected $table = "detalle_cita";
    protected $primaryKey = "Id_Detalle";
    public $timestamps = false;
    
    public function citas(){
        return $this->hasMany('App\Cita', 'Id_Cita_FK');
    }
    public function clientes(){
        return $this->hasMany('App\Cliente', 'Id_Cliente_FK');
    }
    public function empleados(){
        return $this->hasMany('App\Empleado', 'Id_Empleado_FK');
    }
    public function catalogos(){
        return $this->hasMany('App\Catalogo', 'Id_Catalogo_FK');
    }
}
