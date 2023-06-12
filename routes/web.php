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

Route::get('/pasien/tampildata', 'App\Http\Controllers\DataController@tampildata');
Route::get('/pasien/tampilsuhu', 'App\Http\Controllers\DataController@tampilsuhu');
Route::get('/pasien/tampilstatus', 'App\Http\Controllers\DataController@tampilstatus');
Route::get('/pasien/tampilkelembaban', 'App\Http\Controllers\DataController@tampilkelembaban');
Route::get('/inputdata/{suhu}/{kelembaban}', 'App\Http\Controllers\DataController@inputdata');

Route::get('/pasien/tampilgrafik', 'App\Http\Controllers\DataController@tampilgrafik');
Route::get('/pasien/cobagrafik', 'App\Http\Controllers\DataController@cobagrafik');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
