<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'AdminIndex'])->name('Admin.home');


Route::controller(CategoryController::class)->group(function () {
    Route::get('category', 'index')->name('category');
    Route::get('category/create', 'create')->name('category.create');
    Route::post('category', 'store')->name('category.store');
    Route::get('category/edit/{id}', 'edit')->name('category.edit');
    Route::put('category/update/{id}', 'update')->name('category.update');
    Route::get('category/destroy/{id}', 'destroy')->name('category.destroy');
});
Route::controller(AuthorController::class)->group(function () {
    Route::get('author', 'index')->name('author');
    Route::get('author/create', 'create')->name('author.create');
    Route::post('author', 'store')->name('author.store');
    Route::get('author/edit/{id}', 'edit')->name('author.edit');
    Route::put('author/update/{id}', 'update')->name('author.update');
    Route::get('author/destroy/{id}', 'destroy')->name('author.destroy');
});
Route::controller(BookController::class)->group(function () {
    Route::get('book', 'index')->name('book');
    Route::get('book/create', 'create')->name('book.create');
    Route::post('book', 'store')->name('book.store');
    Route::get('book/edit/{id}', 'edit')->name('book.edit');
    Route::put('book/update/{id}', 'update')->name('book.update');
    Route::get('book/destroy/{id}', 'destroy')->name('book.destroy');
});
