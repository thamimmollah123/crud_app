<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});




Route::post('/insert','App\Http\Controllers\StudentController@create');
Route::get('/show','App\Http\Controllers\StudentController@view');
Route::get('/editPage/{id}','App\Http\Controllers\StudentController@edit');
Route::put('/editPage/{id}','App\Http\Controllers\StudentController@update');
Route::get('/delete/{id}','App\Http\Controllers\StudentController@destroy');




