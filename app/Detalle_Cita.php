<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_Cita extends Model
{
    protected $table = "detalle_cita";
    protected $primaryKey = "ID_DETALLE";
    public $timestamps = false;
    
    public function citas(){
        return $this->hasMany('App\Cita', 'ID_CATALOGO_FK');
    }
}
