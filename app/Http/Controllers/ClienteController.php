<?php

namespace App\Http\Controllers;
Use App\Cliente;
Use App\Usuario;
Use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    public function index(){

        if(\Auth::user()->Rol == 2 ){
            $listado_clientes = User::where("Rol","=",1)->paginate(15);
    
        return view('clientes.index')->with("clientes", $listado_clientes);
          }

          $listado_clientes = User::where("Rol","=",1)->paginate(15);
        
          return view('clientes.inadmin')->with("clientes", $listado_clientes);

    }



    public function create(){
        if(\Auth::user()->Rol == 2 ){
            return view('clientes.new');
        }
        return view('clientes.adnew');
        
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
      $a->Rol = 1;
      $a->estado = 1;
      $a->telefono  = $request ->telefono;
      $a->edad  = $request ->edad;
      $a->save();

      return redirect('clientes')
      ->with("exito","El Cliente Fue Registrado Exitosamente");
    }

    public function edit($id){
        $cliente= User::findOrFail($id);
        if(\Auth::user()->Rol == 2 ){
            return view ('clientes.edit', compact('cliente'));
        }
        return view ('clientes.adedit', compact('cliente'));
        }
    
        public function update(Request $request, $id){
            $datosCliente=request()->except(['_token','_method']);
            
            User::where('id','=',$id)->update($datosCliente);
             $cliente= User::findOrFail($id);
            return redirect ('clientes');
        }
            public function inhabilitar($id)
            {
                $cliente = User::findOrFail($id);
                $cliente->estado = 2;
                $cliente->save();

                return redirect("clientes");
            }

            public function habilitar($id)
            {
                $cliente = User::findOrFail($id);
                $cliente->estado = 1;
                $cliente->save();

                return redirect("clientes");
            }
}
