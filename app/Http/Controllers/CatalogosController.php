<?php

namespace App\Http\Controllers;

use App\Catalogos;
use Illuminate\Http\Request;

class CatalogosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['catalogos']=Catalogos::paginate(5);
        return view('catalogos.index',$datos); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('catalogos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosCatalogos=request()->all();

        $datosCatalogos=request()->except('_token');

        if($request->hasFile('Imagen')){
            $datosCatalogos['Imagen']=$request->file('Imagen')->store('uploads','public');

        }

        Catalogos::insert($datosCatalogos);

        return response()->json($datosCatalogos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Catalogos  $catalogos
     * @return \Illuminate\Http\Response
     */
    public function show(Catalogos $catalogos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catalogos  $catalogos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $catalogo=Catalogos::findOrFail($id);
        return view('catalogos.edit',compact('catalogo'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catalogos  $catalogos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCatalogos=request()->except(['_token','_method']);
        Catalogos::where('id','=',$id)->update($datosCatalogos);

        $catalogo=Catalogos::findOrFail($id);
        return view('catalogos.edit',compact('catalogo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catalogos  $catalogos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Catalogos::destroy($id);

        return redirect('catalogos');
    }

    public function adminis()
    {
        return view('cataladmin.index');
    }
    
    public function cuidado()
    {
        return view('catalogos.cuidado');
    }
   
}