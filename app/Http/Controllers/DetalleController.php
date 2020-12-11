<?php

namespace App\Http\Controllers;
use App\Detalle_Cita;
use App\Empleado;
Use App\User;
use App\Clcita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DetalleController extends Controller
{
    public function index(){

        if(\Auth::user()->Rol == 2 ){
            $listado_detalles = Detalle_Cita::where("Id_user_FK","=",\Auth::user()->id)->paginate(15);
    $users = \App\User::select('name')->get();
    return view('detalle_citas.index')
    ->with("detalle_citas", $listado_detalles);
          }

          $listado_detalles = Detalle_Cita::paginate(15);
        $users = \App\User::select('name')->get();
        return view('detalle_citas.indetalle')
        ->with("detalle_citas", $listado_detalles);

    
    }

    public function create(){
        if(\Auth::user()->Rol == 2 ){
            $user = \App\User::where("Rol","=",2)->get();
        // $estado = \App\Empleado::select('Nombre_Empleado')->distinct()->get();
        return view('detalle_citas.new')
        ->with("user" , $user);
        }
        $user = \App\User::where("Rol","=",2)->get();
        // $estado = \App\Empleado::select('Nombre_Empleado')->distinct()->get();
        return view('detalle_citas.adnew')
        ->with("user" , $user);
    }
    public function store(Request $request){

        $reglas=[
            "Id_user_FK" => ['required'], "Id_clcita_FK" => ['required']
        ];
       
      $validador = Validator::make($request->all() , $reglas);
      
      if($validador->fails()){
        return redirect('detalle_citas/create')->withErrors($validador);
      }
      $a = new Detalle_Cita();
      $a->Alergias_Detalle = $request->txtAlergias;
      $a->Precio_Detalle = $request ->txtPrecio;
      $a->Abonos_Detalle = $request ->txtAbonos;
      $a->Id_user_FK  = $request ->sluser;
      $a->Id_clcita_FK  = $request ->txtCitas;
      $a->Detalle_Trabajo = $request->txtDetalle;
      $a->Id_Estado_FK  = 3;
      $a->save();

      return redirect('detalle_citas/create')
      ->with("exito","El detale fue registrado Exitosamente");
    }

    public function edit($Id_Detalle){
        $detalle= Detalle_Cita::findOrFail($Id_Detalle);
        if(\Auth::user()->Rol == 2 ){
            return view ('detalle_citas.edit', compact('detalle'));
        }
        return view ('detalle_citas.adedit', compact('detalle'));
        }
    
        public function update(Request $request, $Id_Detalle){
            $datosDetalle=request()->except(['_token','_method']);
            // var_dump($datosUsuario);
            Detalle_Cita::where('Id_Detalle','=',$Id_Detalle)->update($datosDetalle);
             $detalle= Detalle_Cita::findOrFail($Id_Detalle);
            return view ('detalle_citas.edit', compact('detalle'));
        }
    
        public function destroy(Request $request,$Id_Detalle){
            Detalle_Cita::destroy($Id_Detalle);
            return redirect('usuarios');
       }

       public function inhabilitar($Id_Detalle)
       {
           $detalle = Detalle_Cita::findOrFail($Id_Detalle);
           $detalle->Id_Estado_FK = 4;
           $detalle->save();

           return redirect("detalle_citas");
       }

       public function habilitar($Id_Detalle)
       {
           $detalle = Detalle_Cita::findOrFail($Id_Detalle);
           $detalle->Id_Estado_FK = 3;
           $detalle->save();

           return redirect("detalle_citas");
       }
}