<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ColaboradorController;

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

/*Rutas de gestión de eventos*/

/*Rutas de gestión de socios*/