<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'DeveloperController@list');
Route::get('/create/developer', 'DeveloperController@index');
Route::post('/save/developer', 'DeveloperController@store')->name('save.developer');
Route::get('/update/developer/{id}', 'DeveloperController@show')->name('update.developer');
Route::put('/edit/developer', 'DeveloperController@update')->name('edit.developer');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
