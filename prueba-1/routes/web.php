<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\InstructorController;

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

/*Vista crud fichas*/
Route::get('fichas', [FichaController::class, 'index'])->name('fichas.index');
Route::get('fichas/crear',[FichaController::class,'crear'])->name('fichas.crear');
Route::post('fichas', [FichaController::class, 'guardar'])->name('fichas.guardar');

Route::get('fichas/editar/{id}', [FichaController::class, 'editar'])->name('fichas.editar');
Route::put('fichas/{id}', [FichaController::class, 'actualizar'])->name('fichas.actualizar');
Route::delete('fichas/{id}', [FichaController::class, 'desactivar'])->name('fichas.desactivar');

/*Vista crud instructores*/
Route::get('instructores', [InstructorController::class, 'index'])->name('instructores.index');
Route::get('instructores/crear',[InstructorController::class,'crear'])->name('instructores.crear');
Route::post('instructores', [InstructorController::class, 'guardar'])->name('instructores.guardar');

Route::get('instructores/editar/{id}', [InstructorController::class, 'editar'])->name('instructores.editar');
Route::put('instructores/{id}', [InstructorController::class, 'actualizar'])->name('instructores.actualizar');
Route::delete('instructores/{id}', [InstructorController::class, 'desactivar'])->name('instructores.desactivar');
