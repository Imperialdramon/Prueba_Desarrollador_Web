<?php

use App\Http\Controllers\VehiculoController;
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

// Se accede al historial de dueños
Route::get('/Historial', function () {
    return view('paginas.Historial_duenos');
});
*/



Route::get('/', [UsuarioController::class,'index'])->name('usuarios.index');
/*
Route::get('/create_usuario', [UsuariosController::class,'create'])->name('usuarios.create');
Route::get('/index_usuario', [UsuariosController::class,'index'])->name('usuarios.index');
Route::get('/create_usuario', [UsuariosController::class,'create'])->name('usuarios.create');
Route::get('/index_usuario', [UsuariosController::class,'index'])->name('usuarios.index');
Route::get('/create_usuario', [UsuariosController::class,'create'])->name('usuarios.create');

Route::get('/Vehiculo-POST', [VehiculosController::class,'index'])->name('vehiculos.index');
Route::get('/Vehiculo-POST', [VehiculosController::class,'create'])->name('vehiculos.create');
*/
