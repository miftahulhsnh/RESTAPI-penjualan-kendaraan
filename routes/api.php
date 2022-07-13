<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(
    [
        'middleware' => 'api',
        'namespace' => 'App\Http\Controllers',
        'prefix' => 'auth'
    ],
    function ($router) {
        Route::post('login', 'AuthController@login');
        Route::post('register', 'AuthController@register');
        Route::post('logout', 'AuthController@logout');
        Route::post('profile', 'AuthController@profile');
        Route::post('refresh', 'AuthController@refresh');
    }
);

Route::group(['middleware' => 'jwt.verify'], function () {
    Route::get('/kendaraan', [KendaraanController::class, 'index']);
    Route::get('/kendaraan/mobil', [KendaraanController::class, 'getMobil']);
    Route::get('/kendaraan/motor', [KendaraanController::class, 'getMotor']);
});
Route::group(['middleware' => 'jwt.verify'], function () {
    Route::get('/laporan', [KendaraanController::class, 'laporan']);
    Route::post('penjualan', [KendaraanController::class, 'jual']);
});
