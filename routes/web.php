<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

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
    return view('posts/layout');
});

Route::post('/store', [postController::class,'store']);
Route::get('/posts', [postController::class,'index']);
Route::get('/create', [postController::class,'create']);
Route::get('/edit/{id}', [postController::class,'edit']);
Route::post('/update/{id}', [postController::class,'update']);
Route::get('/show', [postController::class,'show']);