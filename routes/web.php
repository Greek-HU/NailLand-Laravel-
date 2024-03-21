<?php

use App\Http\Controllers\PageController;
use App\Http\Middleware\NameToUppercaseMiddleware;
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


Route::controller(PageController::class)->group(function(){
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('sign-in', 'signInTpl')->name('sign-in');
    Route::post('/login', 'signinPost')->name('login.post');
    Route::get('/', 'home')->name('home');
    Route::get('sign-up', 'create')->name('sign-up');
    Route::post('/store', 'signUp')->middleware(NameToUppercaseMiddleware::class);


});
