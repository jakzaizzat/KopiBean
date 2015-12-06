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



Route::get('/dashboard','AdminsController@index');
Route::get('/user/{id?}', 'AdminsController@show');
Route::get('/user/{id?}/staff', 'AdminsController@assignRole');


Route::get('test', function() {
    dd (DB::connection()->getPdo());
});

Route::get('/roles/add', 'RolesController@create');
Route::post('/roles/add', 'RolesController@store');

Route::get('/permission/add', 'PermissionsController@create');
Route::post('/permission/add', 'PermissionsController@store');

//Hompage
// Route::get('/','PagesController@homepage' );

//Login
Route::get('/', 'Auth\AuthController@getLogin');
Route::post('/', 'Auth\AuthController@postLogin');

//Registration
Route::get('users/register', 'Auth\AuthController@getRegister');
Route::post('users/register', 'Auth\AuthController@postRegister');

//User
Route::get('/users', 'UsersController@index');

//Logout
Route::get('users/logout', 'Auth\AuthController@getLogout');


//Coffee
Route::get('/coffee/add', 'CoffeeController@create');
Route::post('/coffee/add', 'CoffeeController@store');

//Pastry
Route::get('/pastry/add', 'PastrysController@create');
Route::post('/pastry/add', 'PastrysController@store');

//Order
Route::get('/order/index', 'OrdersController@index');
Route::get('/order/new', 'OrdersController@create');
Route::post('/order/new', 'OrdersController@store');
Route::get('/order/{id?}', 'OrdersController@show');