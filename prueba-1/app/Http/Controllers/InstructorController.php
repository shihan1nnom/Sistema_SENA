<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intructor;
use App\Models\Ficha;

class InstructorController extends Controller
{
    public function index(){
        $instructores = Intructor::Paginate(5);
        return view('instructores.index', compact('instructores'));
    }

    public function crear(){
        $fichas = Ficha::all();
        return view('instructores.crear', compact('fichas'));
    }

    public function guardar(Request $request){
        $validar_datos = $request->validate([
          'nombres' => 'required|max:45',
          'apellidos' => 'required|max:45',
          'documento' => 'required|max:45',
          'fotografia' => 'required|max:45',
          'ficha_id' => 'required',
        ]);
        $instructor = Intructor::create($request->all());
        return redirect()->route('instructores.index');
    }

    public function editar($id){
        $fichas = Ficha::all();
        $instructor = Intructor::find($id);
        return view('instructores.editar', compact('fichas', 'instructor'));
    }

    public function actualizar(Request $request, $id){
        $validar_datos = $request->validate([
          'nombres' => 'required|max:45',
          'apellidos' => 'required|max:45',
          'documento' => 'required|max:45',
          'fotografia' => 'required|max:45',
          'ficha_id' => 'required',
        ]);
        $instrcutor = Intructor::find($id)->update($request->all());
        return redirect()->route('instructores.index');
    }

    public function desactivar($id){
        $instructor = Intructor::find($id)->delete();
        return redirect()->route('instructores.index');
    }
}
