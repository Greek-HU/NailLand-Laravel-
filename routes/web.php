<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PrivateController;
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
    Route::get('sign-up', 'create')->name('sign-up');
    Route::post('/store', 'signUp')->name('store');
    Route::get('upload', 'upload')->name('upload');

});

Route::controller(PublicController::class)->group(function()
{
    Route::get('/', 'public')->name('public');
    Route::get('service', 'service')->name('service');
    Route::get('gallery', 'gallery')->name('gallery');
    Route::get('contact', 'contact')->name('contact');

});

Route::controller(PrivateController::class)->group(function()
{
    // Típus szerkesztés
    Route::get('editService', 'editService')->name('editService');
    Route::put('updateType', 'updateType')->name('updateType');
    // Méret és Ár szerkesztése
    Route::get('editNailData/nailID={id}', 'editNail')->name('editNail');
    Route::put('editNailData/updateNail/sizeID={id}', 'updateNail')->name('updateNail/sizeID={id}');
    // Képfeltöltés
    Route::get('picUploader', 'picUploader')->name('picUploader');
    Route::post('storeImage', 'storeImage')->name('storeImage');
    // Kapcsolatok szerkesztés
    Route::get('editContForm', 'editContact')->name('editContForm');
    Route::put('updateContData', 'updateCont')->name('updateContData');
});