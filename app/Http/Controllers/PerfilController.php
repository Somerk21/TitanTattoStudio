<?php

namespace App\Http\Controllers;
Use App\Usuario;
Use App\Perfil;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PerfilController extends Controller
{
    public function index(){

        if(\Auth::user()->Rol == 2 ){
            $perfilview = User::where("id","=",\Auth::user()->id)->get();
    return view('perfiles.index')->with("perfiles", $perfilview);
          }

          $perfilview = User::where("id","=",\Auth::user()->id)->get();
          return view('perfiles.inperfil')->with("perfiles", $perfilview);
    }


    public function edit($id){
        $perfil= User::findOrFail($id);
        return view ('perfiles.edit', compact('perfiles'));
        }
    
    
    public function update(Request $request, $id){
        $data = User::find($id);
        
        $pass = $request->lastpassword;

        
        if(Hash::check( $pass , $data->password)){
            $datosPefil=request()->except(['_token','_method']);
            $datosPefil['password'] = Hash::make($datosPefil['password']);
            User::where('id','=',$id)->update($datosPefil);
             $perfil= User::findOrFail($id);
            return redirect ('perfiles');

    } 

        
    }
}
