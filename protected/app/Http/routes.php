<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'IndexController@home');
Route::get('/news', 'NewsController@news');
Route::get('/about', 'IndexController@about');
Route::get('/visi-misi', 'IndexController@visiMisi');
Route::get('/tugas-fungsi', 'IndexController@tugasFungsi');
Route::get('/structure', 'IndexController@structure');
Route::get('/registration', 'IndexController@registration');
Route::get('/contact', 'IndexController@contact');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
