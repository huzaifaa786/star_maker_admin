<?php

use App\Http\Controllers\Admin\SongController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::view('/', 'layout.admin')->middleware('auth:admin');
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    //// Admin Routes ///

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.',], function () {
        Route::view('login', 'admin.auth.login')->name('login');
        Route::post('login', 'AuthController@login')->name('adminlogin');
        Route::get('logout', 'AuthController@logout')->name('logout')->middleware('auth:admin');

        Route::group(['middleware' => 'auth:admin'], function () {
            Route::view('dashboard', 'layout.admin')->name('dashboard');
            Route::resource('song', SongController::class);
        });
    });
});
