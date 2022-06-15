<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('/layouts/app');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'loadData'])->name('dashboard');

Route::get('/users',[\App\Http\Controllers\UserController::class,'index']);

Route::get('/users',[UserController::class,'getData']);

/*Route::post('logout', '\App\Http\Controllers\Auth\LoginController@logout');*/

/*Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
});*/

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
