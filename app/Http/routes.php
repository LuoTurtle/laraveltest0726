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
    return view('hello');
});
Route::get('1', ['as'=>'about me',function () {
    return view('app');
}]);
Route::get('2', ['as'=>'before1',function () {
    return view('welcome');
}]);
