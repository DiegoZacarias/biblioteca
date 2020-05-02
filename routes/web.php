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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('clients','ClientController')->middleware('auth');

Route::resource('books','BookController')->middleware('auth');

Route::resource('categories','CategoryController')->middleware('auth');

Route::resource('loans','LoanController')->middleware('auth');

Route::resource('details','DetailController')->middleware('auth');

Route::get('/list', 'ListController@index')->name('list')->middleware('auth');

Route::get('list/{loan}', 'ListController@show')->name('show')->middleware('auth');