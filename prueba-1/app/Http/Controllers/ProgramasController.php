<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa_Formacion;
use Illuminate\Support\Facades\DB;

class ProgramasController extends Controller
{
  public function index(){
      $programas = Programa_Formacion::Paginate(5);
      return view('programas_formacion.index', compact('programas'));
  }

  public function crear(){
      return view('programas_formacion.crear');
  }

  public function guardar(Request $request){
      $validar_datos = $request->validate([
        'codigo' => 'required|max:45',
        'nombre' => 'required|max:45',
        'siglas' => 'required|max:10',
      ]);
      $programa = Programa_Formacion::create($request->all());
      return redirect()->route('programas_formacion.index');
  }

  public function editar($id){
      $programa = Programa_Formacion::find($id);
      return view('programas_formacion.editar', compact('programa'));
  }

  public function actualizar(Request $request, $id){
      $validar_datos = $request->validate([
        'codigo' => 'required|max:45',
        'nombre' => 'required|max:45',
        'siglas' => 'required|max:10',
      ]);
      $programa = Programa_Formacion::find($id)->update($request->all());
      return redirect()->route('programas_formacion.index');
  }
}
