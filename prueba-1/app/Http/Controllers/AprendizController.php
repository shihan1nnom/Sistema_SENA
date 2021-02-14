<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendiz;
use App\Models\Ficha;

class AprendizController extends Controller
{
    public function index(){
        $inner_join = Ficha::join('aprendices', 'fichas.id' , '=', 'aprendices.ficha_id')
            ->select('*')
            ->get()
            ->first();
        $aprendices = Aprendiz::Paginate(5);
        return view('aprendices.index', compact('aprendices', 'inner_join'));
    }

    public function crear(){
        $fichas = Ficha::all();
        return view('aprendices.crear', compact('fichas'));
    }

    public function guardar(Request $request){
        $validar_datos = $request->validate([
          'nombres' => 'required|max:45',
          'apellidos' => 'required|max:45',
          'documento' => 'required|max:45',
          'tipo_documento' => 'required|max:45',
          'correo' => 'required|max:45|email',
          'fecha_nacimiento' => 'required',
          'genero' => 'required|max:45',
          'ficha_id' => 'required',
        ]);
        $aprendiz = Aprendiz::create($request->all());
        return redirect()->route('aprendices.index');
    }

    public function editar($id){
        $fichas = Ficha::all();
        $aprendiz = Aprendiz::find($id);
        return view('aprendices.editar', compact('fichas', 'aprendiz'));
    }

    public function actualizar(Request $request, $id){
        $validar_datos = $request->validate([
          'nombres' => 'required|max:45',
          'apellidos' => 'required|max:45',
          'documento' => 'required|max:45',
          'tipo_documento' => 'required|max:45',
          'correo' => 'required|max:45|email',
          'fecha_nacimiento' => 'required',
          'genero' => 'required|max:45',
          'ficha_id' => 'required',
        ]);
        $aprendiz = Aprendiz::find($id)->update($request->all());
        return redirect()->route('aprendices.index');
    }

    public function desactivar($id){
        $aprendiz = Aprendiz::find($id)->delete();
        return redirect()->route('aprendices.index');
    }
}
