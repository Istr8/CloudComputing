<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pagina1', [BookController::class, 'show']);

Route::get('/pagina2',[BookController::class,'pagina2'])->name('book_form');

Route::post('/pagina2', [BookController::class, 'post'])->name('post_book');

?>