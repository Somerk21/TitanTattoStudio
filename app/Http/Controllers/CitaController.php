<?php

namespace App\Http\Controllers;
use App\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CitaController extends Controller
{
    public function index(){
        $listado_citas = Cita::paginate(1);
        return view('citas.index')->with("citas", $listado_citas);
    }
    public function create(){
        return view('citas.new');
    }
}
