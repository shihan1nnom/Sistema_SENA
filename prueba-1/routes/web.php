<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Vista principal*/
Route::view('/', 'home.acercade')->name('home');

/*Vista crud programas de formacion*/
Route::get('programas_formacion', [ProgramasController::class, 'index'])->name('programas_formacion.index');
Route::get('programas_formacion/crear',[ProgramasController::class,'crear'])->name('programas_formacion.crear');
Route::post('programas_formacion', [ProgramasController::class, 'guardar'])->name('programas_formacion.guardar');

Route::get('programas_formacion/editar/{id}', [ProgramasController::class, 'editar'])->name('programas_formacion.editar');
Route::put('programas_formacion/{id}', [ProgramasController::class, 'actualizar'])->name('programas_formacion.actualizar');
