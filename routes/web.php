<?php

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
    return view('auth.login');
});

Route::get('/dashboard','App\Http\Controllers\dasController@index');

Route::get('/dashboard/crud', function () {
    return view('crud.index');
});

Route::get('/dashboard/crud/create', function () {
    return view('crud.create');
});

Route::resource('facturacion','App\Http\Controllers\FacturacionController');
Route::get('/PDF/reporte','App\Http\Controllers\FacturacionController@PDF')->name('VistaPDF');

Route::get('/factura/{id_serie}', 'App\Http\Controllers\FacturacionController@PDF_UNICO')->name('VistaPDF_UNICO');