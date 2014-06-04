<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showWelcome']);


Route::get('/store', ['before' => 'auth' ,'as' => 'store', 'uses' => 'StoreController@showStore']);
Route::get('/store/{id}', ['before' => 'auth' ,'as' => 'store.buy', 'uses' => 'StoreController@buyPack']);


Route::get('/login', ['before' => 'guest', 'as' => 'login', 'uses' => 'UserController@showLogin']);
Route::post('/login', ['before' => 'guest', 'as' => 'login.post', 'uses' => 'UserController@postLogin']);

Route::get('/logout', ['as' => 'logout', 'uses' => 'UserController@logout']);

Route::get('/signup', ['before' => 'guest', 'as' => 'signup', 'uses' => 'UserController@showSignup']);
Route::post('/signup', ['before' => 'csrf', 'as' => 'signup.post', 'uses' => 'UserController@postSignup']);

Route::get('/dashboard', ['before' => 'auth' ,'as' => 'dashboard', 'uses' => 'DashboardController@showDashboard']);
Route::get('/dashboard/newcards', ['before' => 'auth' ,'as' => 'dashboard.newcards', 'uses' => 'DashboardController@newCards']);
Route::get('/dashboard/team', ['before' => 'auth' ,'as' => 'dashboard.team', 'uses' => 'DashboardController@showTeam']);
Route::get('/dashboard/team/equip/{slot}/{card}', ['before' => 'auth' ,'as' => 'dashboard.team.equip', 'uses' => 'DashboardController@postEquip']);


