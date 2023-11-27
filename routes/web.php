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

Route::get('/', function () {
    return redirect()->home();
});

Route::middleware('auth')->group(function(){
    /*documents routes */
    Route::get('/documents','DocumentController@index')->name('documents.index');
    Route::get('/documents/create', 'DocumentController@create')->name('documents.create');
    Route::post('/documents','DocumentController@store')->name('documents.store');
    Route::get('/documents/{id}', 'DocumentController@detail')->name('documents.detail');
    Route::get('/documents/{id}/edit', 'DocumentController@edit')->name('documents.edit');
    Route::put('/documents/{id}', 'DocumentController@update')->name('documents.update');
    Route::delete('/documents/{id}', 'DocumentController@destroy')->name('documents.destroy');


    /*subscribers routes */
    Route::get('/subscribers','SubscriberController@index')->name('subscribers.index');
    Route::get('/subscribers/create','SubscriberController@create')->name('subscribers.create');
    Route::post('/subscribers','SubscriberController@store')->name('subscribers.store');
    Route::get('/subscribers/{id}', 'SubscriberController@detail')->name('subscribers.detail');
    Route::get('/subscribers/{id}/edit', 'SubscriberController@edit')->name('subscribers.edit');
    Route::put('/subscribers/{id}', 'SubscriberController@update')->name('subscribers.update');
    Route::delete('/subscribers/{id}', 'SubscriberController@destroy')->name('subscribers.destroy');

    /*Route::get('/subscribers/delete','SubscriberController@delete')->name('subscribers.delete');
    Route::get('/subscribers/detail','SubscriberController@detail')->name('subscribers.detail');
    Route::get('/subscribers/edit','SubscriberController@edit')->name('subscribers.edit');*/

    /* loans routes */
    Route::get('/loans', 'LoanController@index')->name('loans.index');
    Route::get('/loans/create', 'LoanController@create')->name('loans.create');
    Route::post('/loans', 'LoanController@store')->name('loans.store');
    Route::get('/loans/{id}', 'LoanController@detail')->name('loans.detail');
    Route::get('/loans/{id}/edit', 'LoanController@edit')->name('loans.edit');
    Route::put('/loans/{id}', 'LoanController@update')->name('loans.update');
    Route::delete('/loans/{id}', 'LoanController@destroy')->name('loans.destroy');

    /*Route::get('/loans/delete', 'LoanController@delete')->name('loans.delete');
    Route::get('/loans/detail', 'LoanController@detail')->name('loans.detail');
    Route::get('/loans/edit', 'LoanController@edit')->name('loans.edit');*/

    /* profil routes */
    Route::get('/profile/index', 'ProfilController@index')->name('profile.index');
    Route::get('/profile/edit', 'ProfilController@edit')->name('profile.edit');
    Route::put('/profile/update', 'ProfilController@update')->name('profile.update');


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
