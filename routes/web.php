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

Route::resource('products','ProductController');

Auth::routes();

Route::get('admin/home', 'AdminController@index')->name('admin.home');

Route::get('admin/home/giveRole', 'AdminController@giveRoleToUser')->name('admin.giveRole');

Route::get('/home', 'HomeController@index')->name('home');
