<?php

    use App\Http\Controllers\Backend\DashboardController;
    use App\Http\Controllers\Backend\RoleController;
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
