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
    return view('index.index');
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

Route::post('catagory/add', array(
    'as' => 'catagory.add',
    'uses' => 'CatagoryController@add'
));

Route::post('catagory/delete', array(
    'as' => 'catagory.delete',
    'uses' => 'CatagoryController@delete'
));

Route::post('catagory/reorder', array(
    'as' => 'catagory.reorder',
    'uses' => 'CatagoryController@reorder'
));

Route::get('lists/{catagory}', array(
    'as' => 'lists.index',
    'uses' => 'ListController@index'
));
//use listitem/add instead of lists/add to avoid lists/add hit the lists/{category} wildcard
Route::post('listitem/add', array(
    'as' => 'lists.add',
    'uses' => 'ListController@add'
));

Route::post('listitem/delete', array(
    'as' => 'lists.delete',
    'uses' => 'ListController@delete'
));