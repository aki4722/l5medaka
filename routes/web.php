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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//LoginCheck
Route::group(['middleware' => 'auth'], function () {
	 //rolesCheck
	 Route::group(['middleware' => 'roles', 'roles' => 'admin'], function (){
	 // 以下 に admin 権 限 者 のみ 表示 するルート 定 義 を 記 述 します。
   Route::get('admin', 'Admin\AdminController@index');
   Route::resource('admin/roles', 'Admin\RolesController');
   Route::resource('admin/permissions', 'Admin\PermissionsController');
   Route::resource('admin/users', 'Admin\UsersController');
   Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
   Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);	 });
});
