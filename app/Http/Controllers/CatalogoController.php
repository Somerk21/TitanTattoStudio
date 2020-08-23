<?php

namespace App\Http\Controllers;
use App\Catalogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CatalogoController extends Controller
{
    public function index(){
        $listado_catalogos = Catalogo::paginate(2);
        return view('catalogos.index')->with("catalogos", $listado_catalogos);
    }
    public function create(){
        return view('catalogos.new');
    }
    public function store(Request $request){
        $reglas=[
            "txtImagenCat" => ['required','alpha', 'min:3', 'max:30']          
        ];
        $reglas=[
           
            "txtUrlCat" => ['required','alpha', 'min:5', 'max:30'] 
        ];
        $reglas=[
           
            "txtColorCat" => ['required'] 
        ];
       
      $validador = Validator::make($request->all() , $reglas);
      
      if($validador->fails()){
        return redirect('catalogos/create')->withErrors($validador);
      }
      $a = new Catalogo();
      $a->URL_IMAGEN = $request->txtImagenCat;
      $a->COLOR_IMAGEN = $request ->txtUrlCat;
      $a->NOMBRE_IMAGEN = $request->txtColorCat;
      $a->save();

      return redirect('catalogos/create')
      ->with("BuenaImagen","imagen  registrado Exitosamente");
    }
}
