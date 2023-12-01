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
// Se accede a la ruta de Inicio
//Route::get('/', function () {
//    return view('Usuarios');
//});

// Se accede a la creación de usuarios
//Route::get('/Usuario-POST', function () {
//    return view('Usuario.Crear_Usuario');
//});

// Se accede a la actualización de usuarios
Route::get('/Usuario-UPDATE', function () {
    return view('Usuario.Actualizar_Usuario');
});

// Se accede a la obtención de usuarios
Route::get('/Usuario-GET', function () {
    return view('Usuario.Ver_Usuarios');
});

// Se accede a la eliminación de usuarios
Route::get('/Usuario-DELETE', function () {
    return view('Usuario.Borrar_Usuario');
});

// Se accede a la creación de vehiculos
//Route::get('/Vehiculo-POST', function () {
//    return view('Vehiculo.Crear_Vehiculo');
//});

// Se accede a la actualización de vehiculos
Route::get('/Vehiculo-UPDATE', function () {
    return view('Vehiculo.Actualizar_Vehiculo');
});

// Se accede a la obtención de vehiculos
Route::get('/Vehiculo-GET', function () {
    return view('Vehiculo.Ver_Vehiculos');
});

// Se accede a la eliminación de vehiculos
Route::get('/Vehiculo-DELETE', function () {
    return view('Vehiculo.Borrar_Vehiculo');
});

*/


Route::get('/', function () {
    return view('inicio');
});

Route::get('/usuario', [UsuarioController::class,'index'])->name('usuarios.index');
Route::get('/create_usuario', [UsuarioController::class,'create'])->name('usuarios.create');
Route::post('/store_usuario', [UsuarioController::class,'store'])->name('usuarios.store');
Route::get('/edit_usuario', [UsuarioController::class,'edit'])->name('usuarios.edit');


Route::get('/vehiculo', [VehiculosController::class,'index'])->name('vehiculos.index');
Route::get('/create_vehiculo', [VehiculosController::class,'create'])->name('vehiculos.create');
Route::post('/store_vehiculo', [VehiculosController::class,'store'])->name('vehiculos.store');
Route::get('/edit_vehiculo', [VehiculosController::class,'edit'])->name('vehiculos.edit');

// Se accede al historial de dueños
Route::get('/Historial', function () {
    return view('paginas.Historial_duenos');
});
