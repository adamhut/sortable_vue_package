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
});


Route::get('testmonials', function () {
    return view('testmonials');
});

	
Route::get('css-for-backend-01', function () {
    return view('design.01');
});


Route::get('css-for-backend-02-card' ,function(){
    return view('design.card');
});

Route::get('css-for-backend-02-card-plain-tailwinds', function () {
    return view('design.card-plain-tailwinds');
});

Route::get('rebuild-resolute', function () {
    return view('design.rebuild-resolute');
});


Route::group(['prefix' => 'advanced-vue'], function () {

    Route::get('controlled-component', function () {
        return view('advanced-vue.controlled-component');
    });

    Route::get('wrapping-pikaday', function () {
        return view('advanced-vue.wrapping-pikaday');
    });

    Route::get('encapsulating-external-behavior',function(){
        return view('advanced-vue.encapsulating-external-behavior');
    });
    Route::get('encapsulating-external-behavior-backgroud-scroll', function () {
        return view('advanced-vue.encapsulating-external-behavior-background-scroll');
    });

});


