<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;

Route::view('/', 'index');
Route::resource('/note', NoteController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/author', AuthorController::class);