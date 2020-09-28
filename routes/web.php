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


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function (){

    Route::get('/', 'HomeController@index')->name('admin.home');

    /*metodo de crud de imagenes*/

    Route::resource('files', 'FileController')->names('admin.files');

});




//Route::get('/admin', 'Admin\HomeController@index')->name('admin.home');
/*metodo de crud de imagenes*/
//Route::resource('/admin/files', 'Admin\FileController')->names('admin.files');




