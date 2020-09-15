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
            "txtImagenCat" => ['required', 'min:3', 'max:30']          
        ];
        $reglas=[
            "txtColorCat" => ['required'] 
        ];
        $reglas=[
            "txtUrlCat" => ['required', 'min:5', 'max:30'] 
        ];
      $validador = Validator::make($request->all() , $reglas);
      
      if($validador->fails()){
        return redirect('catalogos/create')->withErrors($validador);
      }
      $a = new Catalogo();
      $a->Nombre_Imagen = $request->txtImagenCat;
      $a->Color_Imagen = $request ->txtColorCat;
      $a->Url_Imagen = $request->txtUrlCat;
      $a->save();

      return redirect('catalogos/create')
      ->with("BuenaImagen","imagen  registrado Exitosamente");
    }
}
