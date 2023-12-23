<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BorrowerController;
use App\Http\Controllers\AuthorBookController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\SoftDeletBookController;

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
    return view('baisView');
})->name('home');


Route::resource('book',BookController::class);
Route::post('bookDestroyAll',[BookController::class,'destroyAll'])->name('destroyAll');
// Route::get('book/destroy/{id}',[BookController::class,'destroy'])->name('book.destroy');


Route::resource('author',AuthorController::class);
Route::get('author/destroy/{id}',[AuthorController::class,'destroy'])->name('author.destroy');


Route::resource('borrower',BorrowerController::class);
Route::get('borrower/destroy/{id}',[BorrowerController::class,'destroy'])->name('borrower.destroy');


Route::resource('transaction',TransactionController::class);
Route::get('transaction/destroy/{id}',[TransactionController::class,'destroy'])->name('transaction.destroy');


Route::get('/author_book',[AuthorBookController::class,'index'])->name('author_book');


Route::get('softDeletBookIndex',[SoftDeletBookController::class,'index'])->name('softDeletBookIndex');
Route::get('softDeletBookRestor/{id}',[SoftDeletBookController::class,'restor'])->name('softDeletBookRestor');
Route::get('softDeletBookForcDelete/{id}',[SoftDeletBookController::class,'forcDelete'])->name('softDeletBookForcDelete');


Route::view('detil','BookVeiw.detilsBook');