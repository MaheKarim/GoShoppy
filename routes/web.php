<?php


    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\SiteController;
    use App\Http\Controllers\User\DashboardController;
    use App\Http\Controllers\Frontend\FrontendController;
    use App\Http\Controllers\User\ProfileController;
    use App\Http\Controllers\User\ShipForMeController;
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
    // Server Command
    Route::get('/optimize', [FrontendController::class, 'optimize']);
    Route::get('/clear', [FrontendController::class, 'clear']);
    Route::get('/install', [FrontendController::class, 'install']);

    Route::resource('/', FrontendController::class);
    Route::get('/home', [HomeController::class, 'index'])->name('home');

  // FAQ Page
    Route::get('/faq', [SiteController::class,'show']);

    Auth::routes();


  // User Route Start From Here
Route::group(['as'=>'user.', 'prefix'=>'user', 'middleware'=>['auth']], function (){
    Route::resource('dashboard', DashboardController::class);
    Route::get('profile', [ProfileController::class,'index'])->name('profileIndex');
    Route::put('profile', [ProfileController::class,'update'])->name('profileUpdate');
    // Password Update
    Route::get('profile/security', [ProfileController::class,'changePassword'])->name('profile.password.change');
    Route::put('profile/security', [ProfileController::class,'updatePassword'])->name('profile.password.update');


    // Ship For Me
    Route::resource('ShipForMe', ShipForMeController::class);
});

