<?php

namespace App\Http\Controllers;
use App\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmpleadoController extends Controller
{
    public function index(){
        $listado_empleados = Empleado::paginate(5);
        return view('empleados.index')->with("empleados", $listado_empleados);
    }
    public function create(){
        return view('empleados.new');
    }

    public function store(Request $request){

        $reglas=[
            "txtNombreEmp" => ['required','alpha', 'min:5', 'max:30']          
        ];
        $reglas=[
           
            "txtApellidoEmp" => ['required','alpha', 'min:5', 'max:30'] 
        ];
        $reglas=[
           
            "txtDireccionEmp" => ['required', 'min:10', 'max:40'] 
        ];
        $reglas=[
           
            "txtCorreoEmp" => ['required', 'min:5', 'max:20'] 
        ];
        $reglas=[
           
            "txtTelefonoEmp" => ['required', 'min:5', 'max:20'] 
        ];
        $reglas=[
           
            "txtDocumentoEmp" => ['required', 'min:5', 'max:16','unique:empleado,DOCUMENTO_EMPLEADO'] 
        ];
        $reglas=[
           
            "txtUsuarioEmp" => ['required'] 
        ];
       
      $validador = Validator::make($request->all() , $reglas);
      
      if($validador->fails()){
        return redirect('empleados/create')->withErrors($validador);
      }
      $a = new Empleado();
      $a->Nombre_Empleado = $request->txtNombreEmp;
      $a->Apellido_Empleado = $request ->txtApellidoEmp;
      $a->Direccion_Empleado = $request->txtDireccionEmp;    
      $a->Correo_Empleado = $request ->txtCorreoEmp;
      $a->Telefono_Empleado = $request ->txtTelefonoEmp;
      $a->Documento_Empleado = $request->txtDocumentoEmp;
      $a->ID_Usuario_FK	 = $request ->txtUsuarioEmp;
      $a->save();

      return redirect('empleados/create')
      ->with("exito","Empleado  registrado Exitosamente")
      ->with("USUARIO",$a->Nombre_Empleado);;
    }
}
