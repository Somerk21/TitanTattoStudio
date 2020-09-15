<?php

namespace App\Http\Controllers;
Use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    public function index(){
    $listado_clientes = Cliente::paginate(2);
    return view('clientes.index')->with("clientes", $listado_clientes);
    }
    public function create(){
        return view('clientes.new');
    }
    public function store(Request $request){

        $reglas=[
            "txtNombreCli" => ['required','alpha', 'min:5', 'max:30']          
        ];
        $reglas=[
           
            "txtApellidoCli" => ['required','alpha', 'min:5', 'max:30'] 
        ];
        $reglas=[
           
            "txtDireccionCli" => ['required','min:10', 'max:40'] 
        ];
        $reglas=[
           
            "txtCorreoCli" => ['required', 'min:5', 'max:20'] 
        ];
        $reglas=[
           
            "txtTelefonoCli" => ['required', 'min:5', 'max:20'] 
        ];
        $reglas=[
           
            "txtDocumentoCli" => ['required', 'min:5', 'max:16','unique:cliente,DOCUMENTO_CLIENTE'] 
        ];
        $reglas=[
           
            "txtFechaNac" => ['required'] 
        ];
        $reglas=[
           
            "txtUsuarioCli" => ['required','unique:cliente,ID_USUARIO_FK'] 
        ];
       
      $validador = Validator::make($request->all() , $reglas);
      
      if($validador->fails()){
        return redirect('clientes/create')->withErrors($validador);
      }
      $a = new Cliente();
      $a->Nombre_Cliente = $request->txtNombreCli;
      $a->Apellido_Cliente = $request ->txtApellidoCli;
      $a->Direccion_Cliente = $request->txtDireccionCli;
      $a->Correo_Cliente = $request ->txtCorreoCli;
      $a->Telefono_Cliente = $request ->txtTelefonoCli;
      $a->Documento_Cliente = $request->txtDocumentoCli;
      $a->Fecha_Nacimiento = $request->txtFechaNac;
      $a->Id_Usuario_FK = $request ->txtUsuarioCli;
      $a->save();

      return redirect('clientes/create')
      ->with("BuenCli","Cliente registrado Exitosamente")
      ->with("Nombre_Cliente",$a->Nombre_Cliente);
    }
}
