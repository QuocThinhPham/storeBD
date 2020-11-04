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

Route::get('/', 'HomeController@index');
Route::get('/admin', function () {
    return view('admin.main');
});

$prefixAdmin = config('config.url.admin.admin');
Route::group(['prefix' => $prefixAdmin], function () {
    Route::get('/', 'HomeController@index');

    $prefixAdmin_Slider = config('config.url.admin.slider');
    $controller = ucfirst($prefixAdmin_Slider) . 'Controller@';
    Route::group(['prefix' => 'slider'], function () use ($controller) {
        Route::get('/', $controller . 'index')->name($controller);
        Route::get('/form/{id?}', $controller . 'form')->where(['id', '[0-9]+'])->name($controller . '.form');
        Route::get('/delete/{id}', $controller . 'delete')->where(['id', '[0-9]+'])->name($controller . '.delete');
    });
});
