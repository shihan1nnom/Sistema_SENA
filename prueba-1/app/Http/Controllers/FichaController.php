<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa_Formacion;
use App\Models\Ficha;

class FichaController extends Controller
{
  public function index(Request $request){
      $buscar = trim($request->get('buscar'));
      $inner_join = Programa_Formacion::join('fichas', 'programas_formacion.id' , '=', 'fichas.programa_id')
            ->select('*')
            ->get()
            ->first();
      $fichas_desactive = Ficha::onlyTrashed()->get();
      $fichas = Ficha::select('*')
        ->where('jornada', 'LIKE', '%'.$buscar.'%')
        ->get();
      return view('fichas.index', compact('fichas', 'buscar', 'fichas_desactive', 'inner_join'));
  }

  public function crear(){
      $programas = Programa_Formacion::all();
      return view('fichas.crear', compact('programas'));
  }

  public function guardar(Request $request){
      $validar_datos = $request->validate([
        'nombre' => 'required|max:45',
        'jornada' => 'required|max:45',
        'aula' => 'required|max:10',
        'programa_id' => 'required',
      ]);
      $ficha = Ficha::create($request->all());
      return redirect()->route('fichas.index');
  }

  public function editar($id){
      $programas = Programa_Formacion::all();
      $ficha = Ficha::find($id);
      return view('fichas.editar', compact('ficha', 'programas'));
  }

  public function actualizar(Request $request, $id){
      $validar_datos = $request->validate([
        'nombre' => 'required|max:45',
        'jornada' => 'required|max:45',
        'aula' => 'required|max:10',
        'programa_id' => 'required',
      ]);
      $ficha = Ficha::find($id)->update($request->all());
      return redirect()->route('fichas.index');
  }

  public function desactivar($id){
      $ficha = Ficha::find($id)->delete();
      return redirect()->route('fichas.index');
  }
}
