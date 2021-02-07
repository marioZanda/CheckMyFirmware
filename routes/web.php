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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('check','BrandModelVersionController@index');
Route::get('get-model-list','BrandModelVersionController@getModelList');
Route::get('get-version-list','BrandModelVersionController@getVersionList');
Route::get('get-version-hash','BrandModelVersionController@getVersionHash');
