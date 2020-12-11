<?php

namespace App\Http\Controllers;
use App\Catalogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Storage;

class CatalogoController extends Controller
{
    public function index(){
        $listado_catalogos = Catalogo::paginate(2);
        return view('catalogos.index')->with("catalogos", $listado_catalogos);
    }
    public function show(){
        return view('catalogos.casa');
    }
    public function create(){
        return view('catalogos.new');
    }
    public function store(Request $request){
      
        //  $reglas=[
        //      "txtImagenCat" => ['required', 'min:3', 'max:30']          
        //  ];
         $reglas=[
             "txtColorCat" => ['required'] 
         ];
         $reglas=[
             "file" => ['required', 'image'] 
         ];
       $validador = Validator::make($request->all() , $reglas);
      
       if($validador->fails()){
         return redirect('catalogos/create')->withErrors($validador);
       }

     $a = new Catalogo();
        $a->Nombre_Imagen = $request->txtImagenCat;
        $a->Color_Imagen = $request ->txtColorCat;
        //$a->Url_Imagen = $request->txtUrlCat;
        $a->Url_Imagen = $request->file('file')->store('public/imagenes');

        $url = Storage::Url_Imagen($a);
    
           Catalogo::create([
               'Url_Imagen'=> $url
           ]);
    
           
        $a->save();

        return redirect('catalogos');

    //    return redirect('catalogos/create')
    //    ->with("BuenaImagen","imagen  registrado Exitosamente");
       

    }
       

    
/*
    public function edit($Id_Usuario){
        $usuario= Usuario::findOrFail($Id_Usuario);
        return view ('usuarios.edit', compact('usuario'));
        }
    
        public function update(Request $request, $Id_Usuario){
            $datosUsuario=request()->except(['_token','_method']);
            // var_dump($datosUsuario);
             Usuario::where('Id_Usuario','=',$Id_Usuario)->update($datosUsuario);
             $usuario= Usuario::findOrFail($Id_Usuario);
            return view ('usuarios.edit', compact('usuario'));
        }
    
        public function destroy(Request $request,$Id_Usuario){
            Usuario::destroy($Id_Usuario);
            return redirect('usuarios');
            }*/ 
}
