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
#首页
//Route::get('/', function () {
//  return view('welcome');
//});
//Auth::loginUsingId(1);
#sites目录
Route::get('/','SiteController@index');
//Route::get('/','Auth\AuthController@getLogin');
Route::get('/about','SiteController@about');
#articles目录
//Route::get('/articles','ArticlesController@index');
//Route::get('/articles/{id}','ArticlesController@show')->where('id', '[0-9]+');
//Route::get('/articles/create','ArticlesController@create');
//Route::post('/articles','ArticlesController@store');
//Route::get('/articles/{$id}/edit','ArticlesController@edit');
Route::resource('articles','ArticlesController');

#注册登录#
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');

Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');

Route::get('auth/logout','Auth\AuthController@getLogout');
