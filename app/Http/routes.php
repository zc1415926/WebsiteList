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
    return view('list.index');
});

Route::post('auth', array(
    'as' => 'auth.login',
    'uses' => 'AuthenticationController@login'
));

Route::get('logout', array(
    'as' => 'auth.logout',
    'uses' => 'AuthenticationController@logout'
));

Route::get('listmanager', array(
    'as' => 'listmanager.index',
    'uses' => 'ListManagerController@index'
));

Route::post('catagory/edit', array(
    'as' => 'catagory.edit',
    'uses' => 'CatagoryController@edit'
));
