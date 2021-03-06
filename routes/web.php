<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;
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

Route::get('/404Error', function() {
    return abort(404);
});

Route::get('500Error', function () {
    return abort(500);
});

Route::get('/date', function () {
    $Now = now();
    return $Now;
});

