<?php

namespace App\Http\Controllers;
Use App\Usuario;
Use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsuarioController extends Controller
{
    public function index(Request $request){
      
           
      //  $nombres = Usuario::where("Nombre_Usuario","like",$request->texto."%")->take(15)->get();
       // return view("usuarios.index",compact("usuarios"));
       

        $listado_usuarios = Usuario::paginate(5);
        return view('usuarios.index')->with("usuarios", $listado_usuarios);
    }
    public function login(){
        return view('usuarios.login');
    }
    
    public function create(){
        return view('usuarios.new');
    }
    
    public function store(Request $request){
        $reglas=[
            "Nombre_Usuario" => ['required', 'min:5', 'max:20','unique:usuario,USUARIO']          
        ];
        $reglas=[
           
            "Clave_Usuario" => ['required', 'min:3', 'max:20'] 
        ];

      $validador = Validator::make($request->all() , $reglas);
      
      if($validador->fails()){
          return redirect('usuarios/create')->withErrors($validador);
      }
      $a = new Usuario();
      $a->Nombre_Usuario = $request->txtNombreUsu;
      $a->Clave_Usuario = $request ->txtClaveUsu;
      $a->save();
      $b = new Cliente();
      $b->Nombre_Cliente = $request->Nombre_Cliente;
      $b->Apellido_Cliente = $request ->Apellido_Cliente;
      $b->Direccion_Cliente = $request->Direccion_Cliente;
      $b->Correo_Cliente = $request ->Correo_Cliente;
      $b->Telefono_Cliente = $request ->Telefono_Cliente;
      $b->Documento_Cliente = $request->Documento_Cliente;
      $b->Fecha_Nacimiento = $request->Fecha_Nacimiento;
      $b->Id_Usuario_FK = $request ->Id_Usuario_FK;
      $b->Id_Estado_FK = 1;
      $b->save();

      return redirect('usuarios/create')
      ->with("exito","Usuario registrado Exitosamente")
      ->with("USUARIO",$a->Nombre_Usuario);
    }
    
    public function edit($Id_Usuario){
    $usuario= Usuario::findOrFail($Id_Usuario);
    return view ('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $Id_Usuario){
        $datosUsuario=request()->except(['_token','_method']);
        // var_dump($datosUsuario);
         Usuario::where('Id_Usuario','=',$Id_Usuario)->update($datosUsuario);
         $usuario= Usuario::findOrFail($Id_Usuario);
        return view ('usuarios.edit', compact('usuario'));
    }

    public function inhabilitar($Id_Usuario)
    {
        $usuario = Usuario::findOrFail($Id_Usuario);
        $usuario->Id_Estado_FK = 2;
        $usuario->save();

        return redirect("usuarios");
    }

    public function habilitar($Id_Usuario)
    {
        $usuario = Usuario::findOrFail($Id_Usuario);
        $usuario->Id_Estado_FK = 1;
        $usuario->save();

        return redirect("usuarios");
    }
}
