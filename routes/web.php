<?php

use App\Http\Controllers\FacturaController;
use App\Http\Controllers\HomeController;
use App\Models\Factura;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/facturas', [FacturaController::class, 'index'])->name('facturas.listar');
Route::get('/facturas/crear', [FacturaController::class, 'view_create']);
Route::post('/facturas/guardar', [FacturaController::class, 'save'])->name('facturas.guardar');
