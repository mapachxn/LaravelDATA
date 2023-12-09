<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\admin\ProfilesController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\UserinfoController;
use App\Http\Controllers\admin\ApartmentsController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\ExtraservicesController;
use App\Http\Controllers\Admin\UnitsController;
use App\Http\Controllers\Admin\AreasController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/cruds', [PrincipalController::class, 'cruds'])->name('cruds');
Route::resource('profiles', ProfilesController::class);
Route::resource('users', UsersController::class);
Route::resource('userinfo', UserinfoController::class);
Route::resource('apartments', ApartmentsController::class);
Route::resource('services', ServicesController::class);
Route::resource('extraservices', ExtraservicesController::class);
Route::resource('units', UnitsController::class);
Route::resource('areas', AreasController::class);



Route::get('/', [PrincipalController::class, 'index']);
#realizar la descarga desde el botón
Route::get('/descarga', [PrincipalController::class, 'descarga']);
#mostrar la base de datos con datos
Route::get('/basededatos', [PrincipalController::class, 'verbd']);
#para mostrar las vistas
Route::get('/vistas/v1', [PrincipalController::class, 'vista1']);
Route::get('/vistas/v2', [PrincipalController::class, 'vista2']);
Route::get('/vistas/v3', [PrincipalController::class, 'vista3']);
Route::get('/vistas/v4', [PrincipalController::class, 'vista4']);
Route::get('/vistas/v5', [PrincipalController::class, 'vista5']);
#para mostrar las consultas
Route::get('/consultas/c1', [PrincipalController::class, 'consulta1']);
Route::get('/consultas/c2', [PrincipalController::class, 'consulta2']);
Route::get('/consultas/c3', [PrincipalController::class, 'consulta3']);