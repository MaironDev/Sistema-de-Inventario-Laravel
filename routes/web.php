<?php

use App\Http\Controllers\PDFController;
use App\Http\Livewire\Inventarios;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\PDF;



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

Route::get('/salir', function () {
    return view('admin.salir');
});




 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


	