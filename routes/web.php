<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// USER
// --------------
Route::get(
    '/',
    [BookListController::class, 'index']
)->name('index');


Route::resource('booksUser', BookListController::class);




Route::get('/dashboard', function () {
    return redirect()->route('books.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('books', BooksController::class);


// afficher formulaire
Route::get('/contact', function(){
    return view('books.contact');
})->name('contact');

Route::get('/suggestion', function(){
    return view('books.suggestion');
})->name('suggestion');

