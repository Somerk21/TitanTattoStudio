<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class LoginController extends Controller
{
    public function login(){
        return view('aut.login');
    }

    public function logout(){
        Auth::logout();
        return redirect ('login');
    }

    public function entrar(Request $r){
        $credentials = $r->only('email', 'password');
        
        if(Auth::attempt($credentials)){
            switch(Auth::User()->Rol){
                
                case 1:return redirect('inicio');
            break;

            case 2:return redirect('employee');
            break;

            case 3:return redirect('administr');
            break;

            }
        }

        else{
            return redirect("login");
        }
    }

    public function mostrar(){

        return view("aut.clihome");

    }

    public function mostrarempleado(){


        return view("aut.employhome");

   }

    public function mostraradmin(){


         return view("aut.adminhome");

    }

    public function RegisView(){
        return view('aut.registrar');
    }

    public function registrar(Request $request){

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
      return view('aut.login');

    }



}
