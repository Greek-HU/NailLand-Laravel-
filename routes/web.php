<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PublicController;
use App\Http\Middleware\NameToUppercaseMiddleware;
use App\Http\Middleware\LogInControll;
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


Route::controller(PageController::class)->group(function()
{
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('sign-in', 'signInTpl')->name('sign-in');
    Route::post('login', 'signInPost')->name('login-post');
    Route::get('logout', 'logout')->name('logout');
    Route::get('private', 'home')->name('home')->middleware(LogInControll::class);
    Route::get('sign-up', 'create')->name('sign-up');
    Route::post('/store', 'signUp')->name('store');

});

Route::controller(PublicController::class)->group(function()
{
    Route::get('/', 'public')->name('public');
    Route::get('service', 'service')->name('service');
    Route::get('contact', 'contact')->name('contact');

});