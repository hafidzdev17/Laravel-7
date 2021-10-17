<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::livewire('/', 'post.index')->name('post.index');
Route::livewire('/create', 'post.create')->name('post.create');
Route::livewire('/edit/{id}', 'post.edit')->name('post.edit');

// TODO: login
// Route::get('/register', 'RegisterController@index')->name('register.index');
// Route::post('/register', 'RegisterController@store')->name('register.store');

// Route::get('/login', 'LoginController@index')->name('login');
// Route::post('/login', 'LoginController@check_login')->name('login.check_login');

// Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
// Route::get('/logout', 'DashboardController@logout')->name('dashboard.logout');
// PHP 7

// TODO: covid
// Route::get('/covid', 'CovidController@index');
// Route::get('/', 'getApiCoronaController@index');

// TODO: component
// Route::get('index', 'SearchController@search');

// Route::get('/user', 'UserController@transaction');

// sinau collection
// Route::get('/collect', 'CollectionController@index');
// Route::get('/latihan', 'CollectionController@latihan');
Route::get('/latihan', 'CollectionController@eloquent');

// sinau container
// Route::get('pay', 'PayOrderController@store');


// Raja Ongkir
// Route::get('/ongkir', 'CheckOngkirController@index');
// Route::post('/ongkir', 'CheckOngkirController@check_ongkir');
// Route::get('/cities/{province_id}', 'CheckOngkirController@getCities');

// TODO: komentar
// Route::get('/post', 'PostController@index');
// Route::get('/{slug}', 'PostController@show');
// Route::post('/comment', 'PostController@comment');
