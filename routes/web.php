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
Route::group(['middleware' => ['admin']], function () {
    Route::get('admin/', 'Admin\IndexController@index')->name('admin.index');
    Route::post('admin/', 'Admin\IndexController@store')->name('admin.index');
    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

        Route::resource('users', 'UserController');
        Route::resource('groups', 'GroupController');
        Route::resource('permissions', 'PermissionController');
        Route::prefix('settings')->name('settings.')->group(function () {
            Route::resource('main','SettingsController');
            Route::resource('users','SettingsController');
            Route::resource('groups','SettingsController');
            Route::resource('administration','SettingsController');
        });

    });
});
Route::any('/logout',function(){
    Auth::logout();
    return redirect()->route('home.index');
})->name('logout');
Auth::routes();

Route::get('/', 'Home\HomeController@index')->name('home.index');
Route::post('/', 'Home\HomeController@store')->name('home.index');
Route::namespace('Home')->name('home.')->group(function () {

});

