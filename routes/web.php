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
    return view('frontpage');
});

Route::get('/notebookapp','NoteBookController@index');
Route::post('/notebookapp','NoteBookController@store');
Route::get('/notebookapp/create','NoteBookController@create');
Route::delete('/notebookapp/{notebookapp}','NoteBookController@destroyed');
Route::get('/notebookapp/{notebook}','NoteBookController@edit');
Route::put('/notebookapp/{notebook}','NoteBookController@update');
