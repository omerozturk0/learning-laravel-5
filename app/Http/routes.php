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

Route::get('/', 'WelcomeController@Index');
Route::resource('users', 'UsersController');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('articles', 'ArticlesController');
});

Route::get('tags/{tags}/{name}', 'TagsController@show');

Route::controllers([
    'pages' => 'WelcomeController',
    'auth' => 'Login\AuthController',
    'password' => 'Login\PasswordController',
]);