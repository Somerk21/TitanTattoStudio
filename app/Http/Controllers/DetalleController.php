<?php

namespace App\Http\Controllers;
use App\Detalle_Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DetalleController extends Controller
{
    
    public function index(){
        $listado_detalles = Detalle_Cita::paginate(2);
        return view('detalle_citas.index')->with("detalles", $listado_detalles);
    }
    public function create(){
        return view('detalle_citas.new');
    }
    public function store(Request $request){

        $reglas=[
            "txtAlergias" => ['required','alpha', 'min:5', 'max:40']          
        ];
        $reglas=[
            "txtPrecio" => ['required','alpha', 'min:5', 'max:30'] 
        ];
        $reglas=[
            "txtDetalle" => ['required','alpha', 'min:10', 'max:300'] 
        ];
        $reglas=[
            "txtClienteFk" => ['required', 'min:5', 'max:20'] 
        ];
        $reglas=[
            "txtEmpleadoFk" => ['required', 'min:5', 'max:16'] 
        ];
        $reglas=[
            "txtCatalogoFk" => ['required','min:5', 'max:20'] 
        ];
        $reglas=[
            "txtAbonos" => ['required', 'min:5', 'max:10'] 
        ];
       
      $validador = Validator::make($request->all() , $reglas);
      
      if($validador->fails()){
        return redirect('detalle_citas/create')->withErrors($validador);
      }
      $a = new Detalle_Cita();
      $a->ALERGIAS_DETALLE = $request->txtAlergias;
      $a->PRECIO_DETALLE = $request ->txtPrecio;
      $a->DETALLE_TRABAJO = $request->txtDetalle;
      $a->ID_CLIENTE_FK = $request ->txtClienteFk;
      $a->ID_EMPLEADO_FK = $request->txtEmpleadoFk;
      $a->ID_CATALOGO_FK = $request ->txtCatalogoFk;
      $a->ABONOS_DETALLE = $request ->txtAbonos;
      $a->save();

      return redirect('detalle_citas/create')
      ->with("exito","detalle  registrado Exitosamente");
    }
}
