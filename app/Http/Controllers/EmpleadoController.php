<?php

namespace App\Http\Controllers;
use App\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmpleadoController extends Controller
{
    public function index(){
        $listado_empleados = Empleado::paginate(1);
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
           
            "txtDireccionEmp" => ['required','alpha', 'min:10', 'max:40'] 
        ];
        $reglas=[
           
            "txtTelefonoEmp" => ['required','alpha', 'min:5', 'max:20'] 
        ];
        $reglas=[
           
            "txtDocumentoEmp" => ['required','alpha', 'min:5', 'max:16','unique:empleado,DOCUMENTO_EMPLEADO'] 
        ];
        $reglas=[
           
            "txtUsuarioEmp" => ['required','alpha', 'min:5', 'max:20'] 
        ];
       
      $validador = Validator::make($request->all() , $reglas);
      
      if($validador->fails()){
        return redirect('empleados/create')->withErrors($validador);
      }
      $a = new Empleado();
      $a->NOMBRE_EMPLEADO = $request->txtNombreEmp;
      $a->APELLIDO_EMPLEADO = $request ->txtApellidoEmp;
      $a->DIRECCION_EMPLEADO = $request->txtDireccionEmp;
      $a->TELEFONO_EMPLEADO = $request ->txtTelefonoEmp;
      $a->DOCUMENTO_EMPLEADO = $request->txtDocumentoEmp;
      $a->ID_USUARIO_FK = $request ->txtUsuarioEmp;
      $a->save();

      return redirect('empleados/create')
      ->with("exito","Empleado  registrado Exitosamente");
    }
}
