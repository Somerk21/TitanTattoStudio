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
           
            "txtDireccionCli" => ['required','alpha', 'min:10', 'max:40'] 
        ];
        $reglas=[
           
            "txtTelefonoCli" => ['required','alpha', 'min:5', 'max:20'] 
        ];
        $reglas=[
           
            "txtDocumentoCli" => ['required','alpha', 'min:5', 'max:16','unique:cliente,DOCUMENTO_CLIENTE'] 
        ];
        $reglas=[
           
            "txtFechaNac" => ['required','alpha'] 
        ];
        $reglas=[
           
            "txtUsuarioCli" => ['required','alpha', 'min:5', 'max:20','unique:cliente,ID_USUARIO_FK'] 
        ];
       
      $validador = Validator::make($request->all() , $reglas);
      
      if($validador->fails()){
        return redirect('clientes/create')->withErrors($validador);
      }
      $a = new Cliente();
      $a->NOMBRE_CLIENTE = $request->txtNombreCli;
      $a->APELLIDO_CLIENTE = $request ->txtApellidoCli;
      $a->DIRECCION_CLIENTE = $request->txtDireccionCli;
      $a->TELEFONO_CLIENTE = $request ->txtTelefonoCli;
      $a->DOCUMENTO_CLIENTE = $request->txtDocumentoCli;
      $a->FECHA_NACIMIENTO = $request->txtFechaNac;
      $a->ID_USUARIO_FK = $request ->txtUsuarioCli;
      $a->save();

      return redirect('clientes/create')
      ->with("BuenCli","Cliente  registrado Exitosamente")
      ->with("NOMBRE_CLIENTE",$a->NOMBRE_CLIENTE);
    }
}
