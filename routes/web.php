<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'home');
//Route::view('/articles/archived', [ArticleController::class, 'indexArchived'] );
Route::resource('articles', ArticleController::class);
//allow to use only the store method, nest liked to articles
Route::resource('articles.comments', CommentController::class)->only('store');

//TODO : add types of articles, author
