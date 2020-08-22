<?php 
namespace App;

use Iluminate\Database\Eloquent\Model;

class Usuario extends Model
{
     protected $table = "usuario";
     protected $primaryKey = "ID_USUARIO";
     public $timestamps = false;

}