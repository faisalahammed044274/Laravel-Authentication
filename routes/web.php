<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;

Route::get('/', [PageController::class, 'index'])->name('index');

// Route::get('/', [StudentController::class, 'index'])->name('index');
Route::get('/create', [StudentController::class, 'create'])->name('create');
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');

Route::post('/store', [StudentController::class, 'store'])->name('store');
Route::post('/update/{id}', [StudentController::class, 'update'])->name('update');
Route::post('/delete/{id}', [StudentController::class, 'delete'])->name('delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
