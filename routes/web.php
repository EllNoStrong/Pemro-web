<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
Route::resource('books', BookController::class);
Route::resource('students', StudentController::class);
Route::resource('employees', EmployeeController::class);
Route::get('/login', [PageController::class, 'login']);
Route::get('/barang', [PageController::class, 'barang']);
Route::get('/transaksi', [PageController::class, 'transaksi']);