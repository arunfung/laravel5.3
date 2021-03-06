<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::group(['domain' => 'laravel53.aruncn.com'], function () {
//    App::setLocale($locale);
//    Route::get('/{locale}', function ($locale) {
//        App::setLocale($locale);
//        return view('welcome');
//    });
    Auth::routes();
    Route::get('/home', 'Home\HomeController@index');
});
Route::group(['domain' => 'admin.aruncn.com'], function () {

    Route::get('login', 'AdminAuth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'AdminAuth\LoginController@login');
    Route::post('logout', 'AdminAuth\LoginController@logout')->name('logout');

    Route::get('/', 'Admin\AdminController@index');
//    Route::get('/home', 'HomeController@index');
});