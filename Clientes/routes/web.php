<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () 
{
    return view('welcome');
});

Route::get('/Cliente', [ClienteController::class,'index'])->name('Cliente.index');
Route::get('/create', [ClienteController::class,'create'])->name('Cliente.create');
Route::get('/edit/{id}', [ClienteController::class,'edit'])->name('Cliente.edit');
Route::post('/store', [ClienteController::class,'store'])->name('Cliente.store');
Route::get('/show/{id}', [ClienteController::class,'show'])->name('Cliente.show');
Route::post('/update', [ClienteController::class,'update'])->name('Cliente.update');
Route::get('/destroy/{id}', [ClienteController::class,'destroy'])->name('Cliente.destroy');




