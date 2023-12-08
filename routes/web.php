<?php

use App\Http\Controllers\articuloController;
use App\Http\Controllers\ArticuloController as ControllersArticuloController;
use App\Http\Controllers\CiudadeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\FormaPagoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TipoDocumentoController;
use App\Models\Tipo_Documento;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
})->name('inicio');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('/factura', FacturaController::class)->middleware('auth');
Route::resource('/clientes', ClienteController::class)->middleware('auth');
Route::resource('/proveedores', ProveedorController::class)->middleware('auth');
Route::resource('/articulos', ControllersArticuloController::class)->middleware('auth');
Route::resource('/ciudades', CiudadeController::class)->middleware('auth');
Route::resource('/tipo_documentos', TipoDocumentoController::class)->middleware('auth');
Route::resource('/forma_pagos', FormaPagoController::class)->middleware('auth');





