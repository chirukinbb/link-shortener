<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::post('/',[\App\Http\Controllers\HomeController::class,'create'])->name('create')
    ->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

Route::get('/abСde',[\App\Http\Controllers\LinkController::class,'index'])->name('links');
Route::get('/abCde/{slug}',[\App\Http\Controllers\LinkController::class,'relocate'])->name('link');
