<?php

namespace App\Http\Controllers;
use App\Detalle_Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DetalleController extends Controller
{
    public function index(){
    $listado_detalles = Detalle_Cita::paginate(5);
    return view('detalle_citas.index')->with("detalle_citas", $listado_detalles);
    }

    public function create(){
    return view('detalle_citas.new');
    }
    public function store(Request $request){

        $reglas=[
            "txtAlergias" => ['required', 'min:5', 'max:150']          
        ];
        $reglas=[
            "txtPrecio" => ['required', 'min:4', 'max:10'] 
        ];
        $reglas=[
            "txtAbonos" => ['required', 'min:4', 'max:10'] 
        ];
        $reglas=[
            "txtClienteFk" => ['required'] 
        ];
        $reglas=[
            "txtEmpleadoFk" => ['required'] 
        ];
        $reglas=[
            "txtCatalogoFk" => ['required'] 
        ];
        $reglas=[
            "txtCitaFk" => ['required'] 
        ];
        $reglas=[
            "txtDetalle" => ['required', 'min:10', 'max:300'] 
        ];
       
      $validador = Validator::make($request->all() , $reglas);
      
      if($validador->fails()){
        return redirect('detalle_citas/create')->withErrors($validador);
      }
      $a = new Detalle_Cita();
      $a->Alergias_Detalle = $request->txtAlergias;
      $a->Precio_Detalle = $request ->txtPrecio;
      $a->Abonos_Detalle = $request ->txtAbonos;
      $a->Id_Cliente_FK = $request ->txtClienteFk;
      $a->Id_Empleado_FK = $request->txtEmpleadoFk;
      $a->Id_Catalogo_FK = $request ->txtCatalogoFk;
      $a->Id_Cita_FK = $request ->txtCitaFk;
      $a->Detalle_Trabajo = $request->txtDetalle;
      $a->save();

      return redirect('detalle_citas/create')
      ->with("exito","El detale fue registrado Exitosamente");
    }
}
