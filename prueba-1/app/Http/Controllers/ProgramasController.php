<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa_Formacion;

class ProgramasController extends Controller
{
  public function index(){
      $programas = Programa_Formacion::all();
      return view('programas_formacion.index', compact('programas'));
  }

  public function crear(){
        return view('programas_formacion.crear');
    }

    public function guardar(Request $request){
        $programa = Programa_Formacion::create($request->all());
        return redirect()->route('programas_formacion.index');
    }
}
