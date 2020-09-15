<?php

namespace App\Http\Controllers;
Use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsuarioController extends Controller
{
    public function index(){
        $listado_usuarios = Usuario::paginate(5);
        return view('usuarios.index')->with("usuarios", $listado_usuarios);
    }

    public function create(){
        return view('usuarios.new');
    }
    
    public function store(Request $request){
        $reglas=[
            "txtNombreUsu" => ['required', 'min:5', 'max:20','unique:usuario,USUARIO']          
        ];
        $reglas=[
           
            "txtClaveUsu" => ['required', 'min:3', 'max:20'] 
        ];

      $validador = Validator::make($request->all() , $reglas);
      
      if($validador->fails()){
          return redirect('usuarios/create')->withErrors($validador);
      }
      $a = new Usuario();
      $a->Nombre_Usuario = $request->txtNombreUsu;
      $a->Clave_Usuario = $request ->txtClaveUsu;
      $a->save();

      return redirect('usuarios/create')
      ->with("exito","Usuario registrado Exitosamente")
      ->with("USUARIO",$a->Nombre_Usuario);
    }

}
