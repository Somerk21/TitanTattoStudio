<?php

namespace App\Http\Controllers;
Use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsuarioController extends Controller
{
    public function index(){
        $listado_usuarios = Usuario::paginate(3);
        return view('usuarios.index')->with("usuarios", $listado_usuarios);
    }

    public function create(){
        return view('usuarios.new');
    }

    public function store(Request $request){
        $reglas=[
            "txtNombreUsu" => ['required','alpha', 'min:5', 'max:20','unique:usuario,USUARIO']          
        ];
        $reglas=[
           
            "txtClaveUsu" => ['required','alpha', 'min:3', 'max:20'] 
        ];

      $validador = Validator::make($request->all() , $reglas);
      
      if($validador->fails()){
          return redirect('usuarios/create')->withErrors($validador);
      }
      $a = new Usuario();
      $a->USUARIO = $request->txtNombreUsu;
      $a->CLAVE = $request ->txtClaveUsu;
      $a->save();

      return redirect('usuarios/create')
      ->with("exito","Usuario registrado Exitosamente")
      ->with("USUARIO",$a->USUARIO);
    }
}
