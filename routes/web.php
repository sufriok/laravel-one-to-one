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



Route::get('/', 'MemberController@index')->name('member.index');
Route::get('/create', 'MemberController@create')->name('member.create');
Route::post('/store', 'MemberController@store')->name('member.store');
Route::get('/{member}/edit', 'MemberController@edit')->name('member.edit');
Route::patch('/{member}/edit', 'MemberController@update')->name('member.update');
Route::delete('/{member}/delete', 'MemberController@destroy')->name('member.destroy');
