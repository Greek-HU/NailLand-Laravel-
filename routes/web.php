<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PrivateController;
use App\Http\Middleware\NameToUppercaseMiddleware;
use App\Http\Middleware\LogInMiddleware;
use Illuminate\Support\Facades\Route;


Route::controller(PageController::class)->group(function()
{
    Route::get('logout', 'logOut')->name('logout');
    Route::get('sign-in', 'signInTpl')->name('sign-in');
    Route::post('login', 'signInPost')->name('login-post');
    Route::get('logout', 'logout')->name('logout');
    Route::get('sign-up', 'create')->name('sign-up');
    Route::post('/store', 'signUp')->name('store');
});

Route::controller(PublicController::class)->group(function()
{
    Route::get('/', 'public')->name('public');
    Route::get('service', 'service')->name('service');
    Route::get('gallery', 'gallery')->name('gallery');
    Route::get('contact', 'contact')->name('contact');
});

Route::controller(PrivateController::class)->middleware(LogInMiddleware::class)->group(function()
{
    // Típus szerkesztés
    Route::get('editService', 'editService')->name('editService');
    Route::put('updateType', 'updateType')->name('updateType');

    // Méret és Ár szerkesztése
    Route::get('editNailData/nailID={id}', 'editNail')->name('editNail');
    Route::put('editNailData/updateNail/sizeID={id}', 'updateNail')->name('updateNail/sizeID={id}');

    //Doboz létrehozás
    Route::get('addnewBox', 'addBox')->name('addnewBox');
    Route::post('createnewBox', 'createBox')->name('createnewBox');

    //Doboz törlése
    Route::get('typeDestroy/{id}', 'destroy')->name('typeDestroy');

    // Kapcsolatok szerkesztés
    Route::get('editContForm', 'editContact')->name('editContForm');
    Route::put('updateContData', 'updateCont')->name('updateContData');
});

Route::controller(GalleryController::class)->middleware(LogInMiddleware::class)->group(function()
{
    // Képfeltöltés
    Route::get('picUploader', 'index')->name('picUploader');
    Route::post('storeImage', 'create')->name('storeImage');

    //Kép Szeresztés
    Route::get('editPic/{id}', 'edit')->name('editPic');
    Route::put('updatePic', 'update')->name('updatePic');

    // Kép törlése
    Route::get('quest/{id}', 'questDestroy')->name('questPic={id}');
    Route::get('destroyPic', 'destroy')->name('destroyPic');

});