<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentscontroller;
Route::get('/', [StudentsController::class, 'homepage'])->name('Home');
Route::get('newuser', [StudentsController::class, 'new'])->name('Add');
Route::post('save', [StudentsController::class, 'store'])->name('save');
Route::get('search', [StudentsController::class, 'found'])->name('find');
Route::post('Display', [StudentsController::class, 'display'])->name('find.post');
Route::get('update', [StudentsController::class, 'updateForm'])->name('UpdateForm');
Route::POST('updateRecord', [StudentsController::class, 'updateRecord'])->name('UpdateRecord');
Route::get('Display', [StudentsController::class, 'deleteForm'])->name('DeleteForm');
