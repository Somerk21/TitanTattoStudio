<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "empleado";
    protected $primaryKey = "Id_Empleado";
    public $timestamps = false;
    
    public function usuarios(){
        return $this->hasMany('App\Usuario', 'ID_USUARIO');
    }
}
