<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [ArticleController::class, 'index']);
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/detail/{id}', [
ArticleController::class,
'detail'
]);
Route::get('/articles/add', [ArticleController::class, 'add']);
Route::post('/articles/add', [
ArticleController::class,
'create'
]);
Route::get('/articles/delete/{id}', [
ArticleController::class,
'delete'
]);
Route::get('/articles/update/{id}', [ArticleController::class, 'edit']);
Route::post('/articles/update/{id}', [
    ArticleController::class,
    'update'
    ]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
