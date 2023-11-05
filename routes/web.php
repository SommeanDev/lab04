<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get(
    '/',
    [HomeController::class,'index']
)->name('homepage');

Route::get(
    '/contact',
    [HomeController::class, 'contact']
)->name('contactpage');

Route::get(
    '/article',
    [ArticleController::class,'index']
)->name('articlepage');

Route::post(
    '/contact',
    [HomeController::class, 'create']
)->withoutMiddleware(['web', 'csrf']);

