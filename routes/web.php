<?php

use App\Http\Controllers\PDFController;
use App\Http\Livewire\Inventarios;
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
Route::view('inventario', 'livewire.inventarios.index')->middleware('auth');
Route::view('proveedores', 'livewire.proveedores.index')->middleware('auth');


Route::get('/', function () {
    return view('dashboard');
});
Route::get('/home', function () {
    return view('dashboard');
});

Route::get('/descargarpdf', [App\Http\Controllers\PDFController::class], 'generatePDF')->name('descargarpdf');
Route::get('/getinventario', [App\Http\Controllers\PDFController::class], 'getInventario')->name('getinventario');
Route::get('/ajustes', function () {
    return view('admin.ajustes');
});
Route::get('/salir', function () {
    return view('admin.salir');
});




 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


	