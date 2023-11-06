<?php

use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\admin\ManagementProdukController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperadminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'verified'])->group(function () {


    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware(['CheckUserRole:superadmin'])->group(function () {
        // Routes accessible only to superadmins
        Route::get('/admin-account', [SuperadminController::class, 'index'])->name('admin.account');
        Route::get('/management-produk', [ManagementProdukController::class, 'index'])->name('management-produk.index');
        Route::get('/dashboard-admin', [DashboardAdminController::class, 'dashboard_admin'])->name('superadmin.dashboard_admin');
    });

    Route::middleware(['CheckUserRole:customer'])->group(function () {
        Route::get('/customer', [CustomerController::class, 'index'])->name('customer.customer');
    });
});

// Route::get('/register', 'RegisterController@showRegistrationForm');
// Route::post('/register', 'RegisterController@register');





require __DIR__.'/auth.php';
