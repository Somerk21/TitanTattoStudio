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
    //public function users(){
      //  return $this->hasMany('App\User', 'id');
    //}
    public function user(){
        return $this->belongsTo('App\User', 'Id_user_FK');
    }

    public function detalle_cita(){
        return $this->belongsTo('App\Detalle_Cita', 'Id_user_FK');
    }
    public function catalogos(){
        return $this->hasMany('App\Catalogo', 'Id_Catalogo_FK');
    }
}
