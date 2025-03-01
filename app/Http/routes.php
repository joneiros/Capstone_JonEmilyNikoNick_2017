<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('about', 'AboutController');
Route::resource('docs', 'DocsController');
Route::get('webkit', 'VideocrController@TakeScreenshot');
Route::get('videocr', 'VideocrController@index');
Route::post('videocr', 'VideocrController@showVideo');
Route::post('videoTess', 'VideocrController@TakeScreenshot');
Route::post('videocr/image', 'VideocrController@readImage');


