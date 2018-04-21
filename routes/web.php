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

Route::get('/', function () {
    return view('welcome');
});

Route::get('date-picker-pikaday',function(){
    return view('pikaday');
});


Route::get('/sortable', function () {
    return view('sortable');
});

Route::get('/sortable-without', function () {
    return view('withoutVue');
});

Route::get('/flickity-without', function () {
    return view('withoutVueFlickity');
});

Route::get('/flickity-with', function () {
    return view('withVueFlickity');
});


Route::get('/modal',function(){
    return view('modal.index');
Route::get('testmonials',function(){
    return view('testmonials');
});

