<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\PatrocinadorController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\EventoController;

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

Route::get('/', function () {return view('welcome');});

Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/*Rutas de gestión de usuarios*/

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/crear', [UserController::class, 'create']);
Route::post('/users/crear',  [UserController::class, 'store']);
Route::get('/users/ver/{id}', [UserController::class, 'show']);
Route::get('/users/editar/{id}', [UserController::class, 'edit']);
Route::put('/users/editar/{id}',  [UserController::class, 'update']);
Route::get('/users/eliminar/{id}',  [UserController::class, 'destroy']);

/*Rutas de gestión de colaboradores*/

Route::get('/colaboradores', [ColaboradorController::class, 'index']);
Route::get('/colaboradores/crear', [ColaboradorController::class, 'create']);
Route::post('/colaboradores/crear',  [ColaboradorController::class, 'store']);
Route::get('/colaboradores/ver/{id}', [ColaboradorController::class, 'show']);
Route::get('/colaboradores/editar/{id}', [ColaboradorController::class, 'edit']);
Route::put('/colaboradores/editar/{id}',  [ColaboradorController::class, 'update']);
Route::get('/colaboradores/eliminar/{id}',  [ColaboradorController::class, 'destroy']);

/*Rutas de gestión de patrocinadores*/

Route::get('/patrocinadores', [PatrocinadorController::class, 'index']);
Route::get('/patrocinadores/crear', [PatrocinadorController::class, 'create']);
Route::post('/patrocinadores/crear',  [PatrocinadorController::class, 'store']);
Route::get('/patrocinadores/ver/{id}', [PatrocinadorController::class, 'show']);
Route::get('/patrocinadores/editar/{id}', [PatrocinadorController::class, 'edit']);
Route::put('/patrocinadores/editar/{id}',  [PatrocinadorController::class, 'update']);
Route::get('/patrocinadores/eliminar/{id}',  [PatrocinadorController::class, 'destroy']);

/*Rutas de gestión de galería*/

Route::get('/galerias', [GaleriaController::class, 'index']);
Route::get('/galerias/crear', [GaleriaController::class, 'create']);
Route::post('/galerias/crear',  [GaleriaController::class, 'store']);
Route::get('/galerias/ver/{id}', [GaleriaController::class, 'show']);
Route::get('/galerias/editar/{id}', [GaleriaController::class, 'edit']);
Route::put('/galerias/editar/{id}',  [GaleriaController::class, 'update']);
Route::get('/galerias/eliminar/{id}',  [GaleriaController::class, 'destroy']);

/*Rutas de gestión de eventos*/

Route::get('/socios', [SocioController::class, 'index']);
Route::get('/socios/crear', [SocioController::class, 'create']);
Route::post('/socios/crear',  [SocioController::class, 'store']);
Route::get('/socios/ver/{id}', [SocioController::class, 'show']);
Route::get('/socios/editar/{id}', [SocioController::class, 'edit']);
Route::put('/socios/editar/{id}',  [SocioController::class, 'update']);
Route::get('/socios/eliminar/{id}',  [SocioController::class, 'destroy']);

/*Rutas de gestión de socios*/

Route::get('/eventos', [EventoController::class, 'index']);
Route::get('/eventos/crear', [EventoController::class, 'create']);
Route::post('/eventos/crear',  [EventoController::class, 'store']);
Route::get('/eventos/ver/{id}', [EventoController::class, 'show']);
Route::get('/eventos/editar/{id}', [EventoController::class, 'edit']);
Route::put('/eventos/editar/{id}',  [EventoController::class, 'update']);
Route::get('/eventos/eliminar/{id}',  [EventoController::class, 'destroy']);