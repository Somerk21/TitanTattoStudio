<?php

namespace App\Http\Controllers;
use App\Cliente;
Use App\Usuario;
Use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EmpleadoController extends Controller
{
    // public function index(){
    //     $listado_empleados = User::where("Rol","=",2)->paginate(10);
    
    //     return view('empleados.index')->with("empleados", $listado_empleados);
    // }

    public function index(){

        // if(\Auth::user()->Rol == 2 ){
        //     $listado_empleados = User::where("Rol","=",2)->paginate(10);
    
        // return view('empleados.index')->with("empleados", $listado_empleados);
        //   }
        
          $listado_empleados = User::where("Rol","=",2)->paginate(15);
    
          return view('empleados.inempleado')->with("empleados", $listado_empleados);
    }



    public function create(){
        if(\Auth::user()->Rol == 2 ){
            return view('empleados.new');
        }
        return view('empleados.adnew');
    }

    public function store(Request $request){

        $reglas=[
            "name" => ['required'], "email" => ['required'], "password" => ['required'], "telefono" => ['required'], "edad" => ['required']          
        ];

       
      $validador = Validator::make($request->all() , $reglas);
      
      if($validador->fails()){
        return redirect('clientes/create')->withErrors($validador);
      }
      $a = new User();
      $a->name = $request->name;
      $a->email  = $request ->email;
      //$a->email_verified_at = $request->password;
      $a->password = Hash::make($request ->password);
      $a->Rol = 2;
      $a->estado = 1;
      $a->telefono  = $request ->telefono;
      $a->edad  = $request ->edad;
      $a->save();

      return redirect('empleados')
      ->with("exito","El Empleado Fue Registrado Exitosamente");
    }

    public function edit($id){
        $empleado= User::findOrFail($id);
        if(\Auth::user()->Rol == 2 ){
            return view('empleados.edit', compact('empleado'));
        }
        return view ('empleados.adedit', compact('empleado'));
        }
    
        public function update(Request $request, $id){
            $datosEmpleado=request()->except(['_token','_method']);
            
            User::where('id','=',$id)->update($datosEmpleado);
             $empleado= User::findOrFail($id);
            return redirect('empleados');
        }
    
        public function inhabilitar($id)
        {
            $empleado = User::findOrFail($id);
            $empleado->estado = 2;
            $empleado->save();

            return redirect("empleados");
        }

        public function habilitar($id)
        {
            $empleado = User::findOrFail($id);
            $empleado->estado = 1;
            $empleado->save();

            return redirect("empleados");
        }
}
