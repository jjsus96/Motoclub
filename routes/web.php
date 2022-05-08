<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
Use App\http\Controllers\ColaboradorController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\PatrocinadorController;
use App\Http\Controllers\SocioController;
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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Colaboradores
Route::group(['middleware' => ['permission:colaboradores.lista']], function () {
    Route::resource('colaboradores', ColaboradorController::class)->names('colaboradores');
});

// Eventos
Route::group(['middleware' => ['permission:eventos.lista']], function () {
    Route::resource('eventos', EventoController::class)->names('eventos');
});

// Galerías
Route::group(['middleware' => ['permission:galerias.lista']], function () {
    Route::resource('galerias', GaleriaController::class)->names('galerias');
});

// Patrocinadores
Route::group(['middleware' => ['permission:patrocinadores.lista']], function () {
    Route::resource('patrocinadores', PatrocinadorController::class)->names('patrocinadores');
});

// Socios
Route::group(['middleware' => ['permission:socios.lista']], function () {
    Route::resource('socios', SocioController::class)->names('socios');
});

// Users
Route::group(['middleware' => ['permission:users.lista']], function () {
    Route::resource('users', UserController::class)->names('users');
});




require __DIR__.'/auth.php';
