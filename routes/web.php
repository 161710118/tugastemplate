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
    return view('welcome');
});

Route::get('1', function () {
    return view('home');
});
Route::get('3', function () {
    return view('gallery');
});

Route::get('4', function () {
    return view('paragraph');
});
Route::get('5', function () {
    return view('kata_mutiara');
});

Route::get('6', function () {
    return view('biodata');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('2', 'TugasController@asiswa');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
