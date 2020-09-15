<?php

namespace App\Http\Controllers;
use App\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CitaController extends Controller
{
    public function index(){
        $listado_citas = Cita::paginate(5);
        return view('citas.index')->with("citas", $listado_citas);
    }
    public function create(){
        return view('citas.new');
    }
    public function store(Request $request){

        $reglas=[
            "txtFechaCita" => ['required']          
        ];
        $reglas=[
           
            "txtDuracionCita" => ['required'] 
        ];
        $reglas=[
           
            "txtEmpleadoCita" => ['required'] 
        ];
        $reglas=[
           
            "txtClienteCita" => ['required'] 
        ];
       
      $validador = Validator::make($request->all() , $reglas);
      
      if($validador->fails()){
        return redirect('citas/create')->withErrors($validador);
      }

      $a = new Cita();
      $a->Fecha_Cita= $request ->txtFechaCita;
      $a->Duracion_Cita = $request->txtDuracionCita;
      $a->ID_Empleado_FK = $request ->txtEmpleadoCita;
      $a->ID_Cliente_FK = $request ->txtClienteCita;
      $a->save();

      return redirect('citas/create')
      ->with("BuenaCita","La Cita Fue Registrada Exitosamente");
      
    }
}
