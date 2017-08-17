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

Route::get('/', function () {

    return view('admin.cqf');
    // return view('admin.lqf');
    return view('welcome');
});


Route::group([
    'prefix' => 'ly',
], function ($router) {
    $router->match(array('GET', 'POST'), '/baset', 'AdminController@index');
    $router->match(array('GET', 'POST'), '/lqk', 'AdminController@lqk');
    $router->match(array('GET', 'POST'), '/cqk', 'AdminController@cqk');
    $router->match(array('GET', 'POST'), '/lhk', 'AdminController@lhk');
    $router->match(array('GET', 'POST'), '/chk', 'AdminController@chk');
    $router->match(array('GET', 'POST'), '/lh', 'AdminController@lh');
});
