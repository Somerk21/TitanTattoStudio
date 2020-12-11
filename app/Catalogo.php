<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    protected $table = "catalogo";
    protected $primaryKey = "ID_CATALOGO";
    protected $fillable = ['Url_Imagen'];
    public $timestamps = false;
}
