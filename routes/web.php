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

Route::get('/', function () {
    return view('welcome');
});

Route::get('items-lists', 'App\Http\Controllers\ItemSearchController@index')->name('items-lists');
Route::post('create-item', 'App\Http\Controllers\ItemSearchController@create')->name('create-item');