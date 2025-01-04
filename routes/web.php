<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;



Route::get('/' , [CategoryController::class , 'index']);
Route::post('/category_store', [CategoryController::class , 'store'])->name('store');