<?php

use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*

//Route::get('/', function () {
//    return view('Usuarios');
//});
*/

// Se accede a la ruta de Inicio
Route::get('/', function () {
    return view('inicio');
});

// Rutas relativas al controlador de usuario
Route::get('/usuario', [UsuarioController::class,'index'])->name('usuarios.index');
Route::get('/create_usuario', [UsuarioController::class,'create'])->name('usuarios.create');
Route::post('/store_usuario', [UsuarioController::class,'store'])->name('usuarios.store');
Route::get('/edit_usuario/{id}', [UsuarioController::class,'edit'])->name('usuarios.edit');
Route::post('/update_usuario/{id}', [UsuarioController::class,'update'])->name('usuarios.update');

// Rutas relativas al controlador de vehiculo
Route::get('/vehiculo', [VehiculosController::class,'index'])->name('vehiculos.index');
Route::get('/create_vehiculo', [VehiculosController::class,'create'])->name('vehiculos.create');
Route::post('/store_vehiculo', [VehiculosController::class,'store'])->name('vehiculos.store');
Route::get('/edit_vehiculo/{id}', [VehiculosController::class,'edit'])->name('vehiculos.edit');
Route::post('/update_vehiculo/{id}', [VehiculosController::class,'update'])->name('vehiculos.update');

// Se accede al historial de dueños
Route::get('/Historial', function () {
    return view('paginas.Historial_duenos');
});
