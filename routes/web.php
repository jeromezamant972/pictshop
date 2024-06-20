<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductsController::class,'index']);
Route::post('/ajouter',[ProductsController::class,'store'])->name('ajouter');
Route::get('/delete/{id}', [ProductsController::class,'delete'])->name('supprimer');
