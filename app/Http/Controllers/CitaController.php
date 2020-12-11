<?php

namespace App\Http\Controllers;
use App\Cita;
use App\Empleado;
Use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CitaController extends Controller
{
    public function index(){
        $listado_citas = Cita::where('Id_Estado_FK', '=', 3)->paginate(5);
    $empleados = \App\Empleado::select('Nombre_Empleado')->get();
    $clientes = \App\Cliente::select('Nombre_Cliente')->get();
    return view('citas.index')
    ->with("empleados", $empleados)
    ->with("clientes", $clientes)
    ->with("citas", $listado_citas);
    }
    public function create(){
        $empleado = \App\Empleado::select('Nombre_Empleado')->distinct()->get();
        return view('citas.new')
        ->with("empleado" , $empleado);
    }
    public function store(Request $request){

        $empleados = \App\Empleado::where('Nombre_Empleado', '=', $request->ID_Empleado_FK)->get();


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
       $a->ID_Empleado_FK = $empleados->first()->Id_Empleado;
       $a->ID_Cliente_FK = $request ->txtClienteCita;
       $a->Id_Estado_FK = 3;
       $a->save();

       return redirect('citas/create')
       ->with("BuenaCita","La Cita Fue Registrada Exitosamente");
      
    }

    public function edit($Id_cita){
        $cita= Cita::findOrFail($Id_cita);
        return view ('citas.edit', compact('cita'));
        }
    
        public function update(Request $request, $Id_cita){
            $datosCita=request()->except(['_token','_method']);
            // var_dump($datosUsuario);
            Cita::where('Id_cita','=',$Id_cita)->update($datosCita);
             $cita= Cita::findOrFail($Id_cita);
            return view ('citas.edit', compact('cita'));
        }
    
        public function pendiente($Id_cita)
            {
                $cita = Cita::find($Id_cita);
                $cita->Id_Estado_FK = 3;
                $cita->save();
                //var_dump($cita);
                return redirect("citas");
            }

            public function finalizar($Id_cita)
            {
                $cita = Cita::findOrFail($Id_cita);
                $cita->Id_Estado_FK = 4;
                $cita->save();

                return redirect("citas");
            }

            public function cancelar($Id_cita)
            {
                $cita = Cita::findOrFail($Id_cita);
                $cita->Id_Estado_FK = 5;
                $cita->save();

                return redirect("citas");
            }
}
