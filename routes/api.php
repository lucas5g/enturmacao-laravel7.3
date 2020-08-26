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

Route::middleware(['jwtApi'])->group(function () {
    Route::view('/', 'home')->name('home');
    Route::resource('users', 'UserController');
    Route::resource('courses', 'CourseController');
});
Route::post('/login', 'AuthController@login');


Route::get('/', function () {
    return ['app' => 'Enturmacao'];
});
