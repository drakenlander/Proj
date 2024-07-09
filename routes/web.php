<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', BookController::class .'@index')->name('books.index');
Route::get('/books/create', BookController::class . '@create')->name('books.create');
Route::post('/books', BookController::class .'@store')->name('books.store');
Route::get('/books/{book}', BookController::class .'@show')->name('books.show');
Route::get('/books/{book}/edit', BookController::class .'@edit')->name('books.edit');
Route::put('/books/{book}', BookController::class .'@update')->name('books.update');
Route::delete('/books/{book}', BookController::class .'@destroy')->name('books.destroy');

Route::get('/explore', BookController::class .'@explore')->name('books.explore');