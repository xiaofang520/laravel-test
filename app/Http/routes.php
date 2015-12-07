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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return "我是get请求";
});
Route::post('/', function () {
    return "我是post请求";
});
//为多种请求注册路由
Route::match(['get', 'post'], '/match', function()
{
    return 'Hello World';
});
Route::any('/user', function()
{
    return 'Hello World';
});