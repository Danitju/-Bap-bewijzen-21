<?php

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
    return view('homepage');
})->name('home');

Route::get('/nieuws', function () {
    return view('nieuws');
})->name('nieuws');

Route::get('/team', function () {
    return view('team');
})->name('team');





Route::get('/test', 'TestController@index');

Route::get('/registratie',	'FormController@showForm')
 ->name('registration.form');

 Route::post('/registratie',	'FormController@handleForm')
 ->name('registration.form.handle');

 Route::get('/registratie/bevestiging', 'FormController@confirmationPage')
 ->name('registration.confrmation');