<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/crear', [UserController::class, 'create']);
Route::post('/users/crear',  [UserController::class, 'store']);
Route::get('/users/ver/{id}', [UserController::class, 'show']);
Route::get('/users/editar/{id}', [UserController::class, 'edit']);
Route::put('/users/editar/{id}',  [UserController::class, 'update']);
Route::get('/users/eliminar/{id}',  [UserController::class, 'destroy']);