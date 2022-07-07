<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\LogsController;
use App\Models\Clientes;
use Illuminate\Support\Facades\Route;

use App\Mail\DescuentosMailable;
use Illuminate\Support\Facades\Mail;

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
    return view('auth/login');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [ClientesController::class, 'ver'])->name('dashboard');
    Route::get('agregar_cliente', [ClientesController::class, 'agregar'])->name('cliente.agregar');
    Route::post('guardar_agregar_cliente', [ClientesController::class, 'guardar_VIP'])->name('cliente.guardar_VIP');
    Route::post('guardar_agregar_cliente_10', [ClientesController::class, 'guardar_10'])->name('guardar_10');
    Route::post('agregar_log/{id}', [LogsController::class, 'agregar'])->name('guardar.log');
});

Route::get('descuento/{id}/{slug}', [ClientesController::class, 'card'])->name('card');
Route::view('crear_cliente', 'agregar');

Route::get('email', function(){
    $info = [
        "nombre" => "Daniel",
        "apellido" => "Sanchez",
        "img" => "qrcode"
    ];
    $correo = new DescuentosMailable($info);
    Mail::to('dsanchez.atsv@gmail.com')->send($correo);
    return "mensaje enviado";
});
Route::view('test','cliente');
Route::view('notif_mail', 'mails.notificacion_testing');