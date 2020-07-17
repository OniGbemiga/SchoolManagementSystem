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
    return view('auth/login');
});
Route::get('/register', function () {
    return view('auth/register');
});

//PagesController
Route::get('/biodata','PagesController@biodata')->name('biodata');
Route::get('/students/{course}','PagesController@student');
Route::get('/profile','PagesController@profile')->name('profile');
Route::get('/register_course','PagesController@registerCourse')->name('course');
Route::get('/docs/{biodata}','PagesController@doc');

//RegisterCourseCOntroller
Route::resource('course','RegisterCourseController')->only(['store']);

//BiodataController
Route::resource('biodata','BiodataController')->only('store');

//Register and Login
Route::post('register', 'RegisterController@register')->name('register');
Route::post('login', 'LoginController@login')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');
