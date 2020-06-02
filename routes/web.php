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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get ('/user_home', 'UserHomeController@index')->name('user.home.index');
Route::get ('/settings/index', 'SettingController@index')->name('settings.index');

Route::get ('/contents/index', 'ContentController@index')->name('contents.index');
Route::get ('/contents/new', 'ContentController@new')->name('contents.new');
Route::post ('/contents/create', 'ContentController@create')->name('contents.create');
Route::get ('/contents/detail/{contents_id}', 'ContentController@detail')->name('contents.detail');