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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/mobile', function () {
    return view('mobile');
})->name('mobile');

Route::get('/seo', function () {
    return view('seo');
})->name('seo');

Route::get('/smm', function () {
    return view('smm');
})->name('smm');


Route::post('/submit', 'HomeController@submit')->name('home-form');
Route::get('/all', 'HomeController@allData')->name('home-data');
Route::get('/all/{id}', 'HomeController@showOneMessage')->name('home-data-one');
Route::get('/all/{id}/update', 'HomeController@updateMessage')->name('home-update');
Route::post('/all/{id}/update', 'HomeController@updateMessageSubmit')->name('home-update-submit');
Route::get('/all/{id}/delete', 'HomeController@deleteMessage')->name('home-delete');