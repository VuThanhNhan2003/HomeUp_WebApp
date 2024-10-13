<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\BookingPageController;
use App\Http\Controllers\LandlordController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminManageController;

use App\Http\Controllers\PropertyDetailsPageController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/dash', function () {
    return view('dashboard');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

use App\Http\Controllers\DashboardController;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});


// Route::get('admin/dashboard',[AdminController::class,'index'])->
//         middleware(['auth','admin']);
// Route::get('guest/dashboard',[GuestController::class,'index'])->
//         middleware(['auth','guest']);
// Route::get('landlord/dashboard',[LandlordController::class,'index'])->
//         middleware(['auth','landlord']);


Route::middleware(['auth','admin'])->group(function () {
        Route::get('admin/dashboard', [AdminController::class, 'currentAdmin']);
        Route::get('/admin', action: [AdminManageController::class, 'index']);
        Route::post('/updatecurrentAdmin/{adminID}', [AdminController::class, 'updatecurrentAdmin']);
        Route::get('/manage_admin', [AdminController::class, 'manage_admin']);
        Route::get('/editAdmin/{admin_id}', [AdminController::class, 'editAdmin']);
        Route::post('/updateAdmin/{adminID}', [AdminController::class, 'updateAdmin']);
        Route::get('/deleteAdmin/{admin_id}', [AdminController::class, 'deleteAdmin']);

        
});
        

Route::middleware(['auth','guest','admin'])->group(function () {
    // Backend---------------
    Route::get('guest/dashboard',[GuestController::class,'index']);


    // Frontend---------------
    Route::get('/CheckoutPageA', function () {
        return view('CheckoutPageA');
    });
        
    Route::get('/CheckoutPageB', function () {
        return view('CheckoutPageB');
    });
});


Route::middleware(['auth','landlord','admin'])->group(function () {
    Route::get('landlord/dashboard',[LandlordController::class,'index']);
});
        

// ------FrontEnd------------------------
Route::get('/', function () {
    return view('Homepage');
});
Route::get('/HomePage', function () {
    return view('Homepage');
});

Route::get('/Landlord', function () {
    return view('Landlords');
});

Route::get('/Blog', function () {
    return view('Blog');
});

Route::get('/PropertyDetails', function () {
    return view('PropertyDetails');
});

Route::get('/Contact', function () {
    return view('contactPage');
});
// Route::get('/CheckoutPageA', function () {
//     return view('CheckoutPageA');
// });

// Route::get('/CheckoutPageB', function () {
//     return view('CheckoutPageB');
// });

// Route::get('/map', [MapController::class, 'generateMapIframe']);

Route::get('/bookingPage', [BookingPageController::class, 'showMap']);
Route::get('/PropertyDetails', [PropertyDetailsPageController::class, 'showMap']);
