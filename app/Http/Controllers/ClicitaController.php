<?php

namespace App\Http\Controllers;
use App\Detalle_Cita;
use App\Clcita;
use App\Cliente;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClicitaController extends Controller
{

    public function vistaConsultar(){

      if(\Auth::user()->Rol == 2 ){
        //var_dump(DB::table('clcita')->select('clcita.*')->join('detalle_cita', 'detalle_cita.Id_clcita_FK', '=', 'clcita.Id_clcita')->where('detalle_cita.Id_user_FK', '=', \Auth::user()->id)->get(), \Auth::user()->id);
        //die;
        $listado_citas = DB::table('clcita')->select('clcita.*', 'users.name')->join('detalle_cita', 'detalle_cita.Id_clcita_FK', '=', 'clcita.Id_clcita')->where('detalle_cita.Id_user_FK', '=', \Auth::user()->id)->join('users', 'users.id', '=', 'clcita.ID_User_FK')->paginate(15);
        
        //$users = \App\User::select('name')->get();
    return view('clcitas.vistaConsultar')
    ->with("clcitas", $listado_citas);

        //$listado_citas = \DB::select('SELECT  * FROM vwconsultacita');
        //return view('clcitas.vistaConsultar')->with("clcitas", $listado_citas);
      }

        $listado_citas = Clcita::paginate(15);
        
        $users = \App\User::select('name')->get();
    return view('clcitas.inVistaC')
    ->with("clcitas", $listado_citas);

        //$listado_citas = \DB::select('SELECT  * FROM vwconsultacita');
        //return view('clcitas.inVistaC')->with("clcitas", $listado_citas);
    }

    public function index(){
      
        //$listado_citas = \Auth::User()->clcitas->all();
        $listado_citas = Clcita::where("ID_User_FK","=",\Auth::user()->id)->paginate(25);

        
        return view('clcitas.index')->with("clcitas", $listado_citas);
    }



    public function vistaCrear(){
      $user = \App\User::where("Rol","=",1)->get();
      
      return view('clcitas/insertar')
      ->with("user" , $user);

    }

    public function create(){
        
        return view('clcitas.new');

    }

    public function store(Request $request){

        $reglas=[
            "Fecha_Cita" => ['required', 'date'], "HoraCita" => ['required']
        ];

      $validador = Validator::make($request->all() , $reglas);
      
      if($validador->fails()){
        return redirect('clcitas/create')->withErrors($validador);
      }
    //   $cliente= Cliente::findOrFail($Id_Cliente);
      if($this->validarCita($request)){
        $a = new Clcita();
        $a->Fecha_Cita= $request ->Fecha_Cita;
        $a->HoraCita = $request->HoraCita;
        $a->ID_User_FK  = \Auth::user()->id;
        $a->estado  = 3;
        $a->save();
  
        return redirect('clcitas')
        ->with("BuenaCita","La Cita Fue Registrada Exitosamente");
      }
      //dd('error');
      return redirect('clcitas')
        ->withErrors(["message"=>"Hay demasiadas citas a esta hora, por favor agende para una hora distinta o un dia distinto"]);
      //echo('Hay demasiadas citas a esta hora, por favor agende para una hora distinta o un dia distinto');
    }

    public function employStore(Request $request){

        $reglas=[
            "Fecha_Cita" => ['required', 'date'], "HoraCita" => ['required'], "ID_User_FK" => ['required']
        ];

      $validador = Validator::make($request->all() , $reglas);
      
      if($validador->fails()){
        return redirect('clcitas/create')->withErrors($validador);
      }
    //   $cliente= Cliente::findOrFail($Id_Cliente);
      if($this->validarCita($request)){
        $a = new Clcita();
        $a->Fecha_Cita= $request ->Fecha_Cita;
        $a->HoraCita = $request->HoraCita;
        $a->ID_User_FK = $request->ID_User_FK;
        $a->estado  = 3;
        $a->save();
  
        return redirect('clcitas/vistaConsultar')
        ->with("BuenaCita","La Cita Fue Registrada Exitosamente");
      }
      dd('error');
    }

    public function validarCita($request){
        $cita = Clcita::where('Fecha_Cita', $request->Fecha_Cita)->where('HoraCita', $request->HoraCita)->where('estado','!=',5)->count();
        
        if($cita >= 4)
        {
            return false;
        } else{
            return true;
        }
    }

    public function edit($Id_clcita){
        $clcitas= Clcita::findOrFail($Id_clcita);
        return view ('clcitas.edit', compact('clcitas'));
        }
    
        public function update(Request $request, $Id_clcita){
            $datosCita=request()->except(['_token','_method']);
            // var_dump($datosUsuario);
            Clcita::where('Id_clcita','=',$Id_clcita)->update($datosCita);
             $clcitas= Clcita::findOrFail($Id_clcita);
            return view ('clcitas.edit', compact('clcitas'));
        }
    
        public function pendiente($Id_clcita)
            {
                $clcitas = Clcita::findOrFail($Id_clcita);
                $clcitas->estado = 3;
                $clcitas->save();

                return redirect("clcitas/vistaConsultar");
            }

            public function finalizar($Id_clcita)
            {
                $clcitas = Clcita::findOrFail($Id_clcita);
                $clcitas->estado = 4;
                $clcitas->save();

                return redirect("clcitas/vistaConsultar");
            }

            public function cancelar($Id_clcita)
            {
                $clcitas = Clcita::findOrFail($Id_clcita);
                $clcitas->estado  = 5;
                $clcitas->save();

                return redirect("clcitas");
            }
}