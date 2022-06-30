<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\LogsController;
use App\Models\Clientes;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [ClientesController::class, 'ver'])->name('dashboard');
    Route::get('agregar_cliente', [ClientesController::class, 'agregar'])->name('cliente.agregar');
    Route::post('guardar_agregar_cliente', [ClientesController::class, 'guardar'])->name('cliente.guardar');
    Route::post('agregar_log/{id}', [LogsController::class, 'agregar'])->name('guardar.log');
});

Route::get('descuento/{id}/{slug}', [ClientesController::class, 'card'])->name('card');

Route::view('test','cliente');