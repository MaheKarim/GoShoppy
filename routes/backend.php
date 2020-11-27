<?php

    use App\Http\Controllers\Backend\BuyOrderProcessController;
    use App\Http\Controllers\Backend\CourierTypeController;
    use App\Http\Controllers\Backend\DashboardController;
    use App\Http\Controllers\Backend\FAQController;
    use App\Http\Controllers\Backend\GetQuoteFormController;
    use App\Http\Controllers\Backend\PaymentStatusController;
    use App\Http\Controllers\Backend\ProfileController;
    use App\Http\Controllers\Backend\RoleController;
    use App\Http\Controllers\Backend\ShipOrderProcessController;
    use App\Http\Controllers\Backend\StatusController;
    use App\Http\Controllers\Backend\USAddressController;
    use App\Http\Controllers\Backend\UserController;
    use App\Http\Controllers\PaymentServiceController;
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

    // Ship For Me Admin Access
    Route::resource('shipforme-orders', ShipOrderProcessController::class);
    Route::resource('buyforme-orders', BuyOrderProcessController::class);

    // Profile Controller
    Route::get('profile', [ProfileController::class,'index'])->name('profile.index');
    Route::put('profile', [ProfileController::class,'update'])->name('profile.update');
    Route::get('profile/password', [ProfileController::class,'changePassword'])->name('password.index');
    Route::put('profile/password', [ProfileController::class,'updatePassword'])->name('password.update');

    // Courier Type Controller
    Route::resource('courier-types', CourierTypeController::class);
    // GetQuoteForm - Frontend Page
    Route::resource('client-quote', GetQuoteFormController::class);
    // Payment Service Controller
    Route::resource('payment-service', PaymentServiceController::class);
    // Payment Receive
    Route::resource('payment-receive', PaymentStatusController::class);
