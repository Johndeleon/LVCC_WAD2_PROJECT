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

Route::get('/','MineController@Welcome');


Route::get('/index', 'MineController@Index');
Route::get('/blocks/thisblock/index', 'MineController@Clear');

Route::get('/AdminPage','MineController@AdminPage');
Route::get('/NewBlock','MineController@NewBlockWindow');
Route::get('/NewType','MineController@NewTypeWindow');

Route::post('/CreateBlock','MineController@CreateBlock');
Route::post('/CreateType','MineController@CreateType');

Route::get('/UpdateBlock','MineController@UpdateBlock');
Route::get('/UpdateThisB/{id}','MineController@UpdateThisB');
Route::post('/UpdateNowB','MineController@UpdateNowB');

Route::get('/UpdateType','MineController@UpdateType');
Route::get('/UpdateThis/{id}','MineController@UpdateThis');
Route::post('/UpdateNow','MineController@UpdateNow');

Route::get('/DeleteType','MineController@DeleteWhat');
Route::get('/DeleteThis/{id}','MineController@DeleteThis');

Route::get('/DeleteBlock','MineController@DeleteWhatB');
Route::get('/DeleteThisB/{id}','MineController@DeleteThisB');
Route::get('login','MineController@Login');

Route::get('changecredentials','MineController@Change');
Route::post('ChangeNow','MineController@ChangeNow');
//----------------user---------------------------------

Route::get('/blocks/{id}','MineController@ShowBlocks');

Route::get('blocks/thisblock/{id}','MineController@ThisBlock');



//----------------------auth----------------------
Auth::routes();

Route::get('/home', 'HomeController@index');
