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

Route::view('/', 'welcome');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::group(['as' => 'app.', 'prefix'=>'app', 'namespace' => 'Backend', 'middleware' =>['auth']], function (){
    Route::get('/dashboard', 'DashboardController')->name('dashboard');
});
