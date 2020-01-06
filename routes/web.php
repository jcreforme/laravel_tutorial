<?php

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
//http://localhost:8888/lsapp/public/

/*

Route::get('/hello', function () {
    return "hello ass";
});*/

Route::get('/', 'PagesController@index'); // PagesController is the Class, index is the method

/*Route::get('/about', function () {
    return view('pages.about'); //same as 'pages/about'
});*/


Route::get('/about', 'PagesController@about');

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'this is the usr id'.$id;
});