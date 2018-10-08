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

Route::get('/','DatabaseController@read_backup_files');
Route::get('/create-backup','DatabaseController@create_backup');
Route::get('download-database/{dump_file}','DatabaseController@download_database')->name('download-database');