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
    return view('auth/register');
});

//PagesController
Route::get('/biodata','PagesController@biodata')->name('biodata');
Route::get('/student','PagesController@student')->name('student');
Route::get('/profile','PagesController@profile')->name('profile');
Route::get('/register_course','PagesController@registerCourse')->name('course');
