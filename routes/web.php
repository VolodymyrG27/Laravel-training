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
// GET and POST
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'IndexController@index');
// article/1
Route::get('article/{Id}', 'IndexController@show')->name('articleShow'); // псевдонім дає право звертатися до конкретного маршруту 
Route::get('page/add', 'IndexController@add');
Route::post('page/add' 'IndexController@store');