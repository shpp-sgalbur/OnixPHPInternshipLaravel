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

Route::post('/store', [PostController::class,'store']);
Route::get('/', [PostController::class,'index']);
Route::get('/create', [PostController::class,'create']);
Route::get('/edit/{id}', [PostController::class,'edit']);
Route::post('/update/{id}', [PostController::class,'update']);
Route::get('/show/{id}', [PostController::class,'show']);
Route::get('/delete/{id}', [PostController::class,'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
