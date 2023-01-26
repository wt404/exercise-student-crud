<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Index
Route::get('/students', [StudentController::class, 'index'])->name('index');
// Create & store
Route::get('/students/create', [StudentController::class, 'create'])->name('create');
Route::post('/students/create', [StudentController::class, 'store'])->name('store');
// Show
Route::get('/students/show/{id}', [StudentController::class, 'show'])->name('show');
// Edit and update
Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::post('/students/update/{id}', [StudentController::class, 'update'])->name('update');
// Delete
Route::post('/students/destroy/{id}', [StudentController::class, 'destroy'])->name('destroy');
