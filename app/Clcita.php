<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clcita extends Model
{
    protected $table = "clcita";
    protected $primaryKey = "Id_clcita";
    public $timestamps = false;
    protected $fillable = [
        'Fecha_Cita', 'HoraCita'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'ID_User_FK');
    }

    public function detalle_cita(){
        return $this->belongsTo('App\Detalle_Cita', 'Id_user_FK');
    }
}
