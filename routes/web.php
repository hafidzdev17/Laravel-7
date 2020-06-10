<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

// TODO: login
Route::get('/register', 'RegisterController@index')->name('register.index');
Route::post('/register', 'RegisterController@store')->name('register.store');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@check_login')->name('login.check_login');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
Route::get('/logout', 'DashboardController@logout')->name('dashboard.logout');
// PHP 7

// TODO: covid
Route::get('/covid', 'CovidController@index');
Route::get('/', 'getApiCoronaController@index');

// TODO: component
Route::get('/index', function () {
    return view('index', [
        "info" => 'Info Is Verified'
    ]);
});

// Raja Ongkir
Route::get('/ongkir', 'CheckOngkirController@index');
Route::post('/ongkir', 'CheckOngkirController@check_ongkir');
Route::get('/cities/{province_id}', 'CheckOngkirController@getCities');

// TODO: komentar
Route::get('/post', 'PostController@index');
Route::get('/{slug}', 'PostController@show');
Route::post('/comment', 'PostController@comment');
