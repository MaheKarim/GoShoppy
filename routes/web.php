<?php

    use App\Http\Controllers\Backend\DashboardController;
    use App\Http\Controllers\Backend\RoleController;
    use App\Http\Controllers\HomeController;
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
Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();


Route::group(['as' => 'app.', 'prefix'=>'app', 'middleware' =>['auth']], function (){

    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('roles', RoleController::class);
});
