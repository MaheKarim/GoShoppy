<?php

    use App\Http\Controllers\Backend\DashboardController;
    use App\Http\Controllers\Backend\FAQController;
    use App\Http\Controllers\Backend\ProfileController;
    use App\Http\Controllers\Backend\RoleController;
    use App\Http\Controllers\Backend\ShipOrderProcessController;
    use App\Http\Controllers\Backend\StatusController;
    use App\Http\Controllers\Backend\USAddressController;
    use App\Http\Controllers\Backend\UserController;
    use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Route Mapping From ==> RouteServiceProvider
|
|
*/



    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('us-address', USAddressController::class);
    Route::resource('status', StatusController::class);
    Route::resource('faq-system', FAQController::class);

    Route::resource('shipforme-orders', ShipOrderProcessController::class);


    // Profile Controller

    Route::get('profile', [ProfileController::class,'index'])->name('profile.index');
    Route::put('profile', [ProfileController::class,'update'])->name('profile.update');
