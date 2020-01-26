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




Route::group(['prefix'=> ''] , function(){

    Route::get('' , 'PageController@home')->name('index');
    Route::get('/form' ,'PageController@form')->name('form');
    Route::post('post-form' , 'UserController@create')->name('formCreate');
    Route::post('form-course' , 'UserController@createCourse')->name('Create');
    Route::get('course-form' , 'PageController@course')->name('course');
    Route::get('sap-test' , 'PageController@testIndex')->name('test');
    Route::get('sap-quiz' , 'PageController@quiz')->name('quiz');
});

