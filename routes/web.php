<?php


    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\User\DashboardController;
    use App\Http\Controllers\Frontend\FrontendController;
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

Route::resource('/', FrontendController::class);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();
  // User Route Start From Here
Route::group(['as'=>'user.', 'prefix'=>'user', 'middleware'=>['auth']], function (){
    Route::resource('dashboard', DashboardController::class);
});

