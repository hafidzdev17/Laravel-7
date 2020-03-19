<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/register', 'RegisterController@index')->name('register.index');
Route::post('/register', 'RegisterController@store')->name('register.store');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@check_login')->name('login.check_login');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
Route::get('/logout', 'DashboardController@logout')->name('dashboard.logout');
// PHP 7

Route::get('/', function () {
    $response = Http::get('');
});

Route::get('/index', function () {
    return view('index', [
        "info" => 'Info Is Verified'
    ]);
});
