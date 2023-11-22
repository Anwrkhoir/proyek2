<?php

use App\Http\Controllers\admin\CreateMenuController;
use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\admin\EditMenuController;
use App\Http\Controllers\admin\ManagementProdukController;
use App\Http\Controllers\admin\PesananController;
use App\Http\Controllers\admin\TransaksiController;
use App\Http\Controllers\customer\CartController;
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
        Route::get('/management-produk/makanan', [ManagementProdukController::class, 'makanan'])->name('management-produk.makanan');
        Route::get('/management-produk/minuman', [ManagementProdukController::class, 'minuman'])->name('management-produk.minuman');
        Route::post('/management-produk', [ManagementProdukController::class, 'store'])->name('management-produk.store');
        Route::get('/dashboard-admin', [DashboardAdminController::class, 'dashboard_admin'])->name('superadmin.dashboard_admin');
        Route::get('/create-menu', [CreateMenuController::class, 'create'])->name('management_produk.create_menu');
        Route::get('/edit-menu/{id}', [ManagementProdukController::class, 'edit'])->name('management_produk.edit_menu');
        Route::put('/update-menu/{id}', [ManagementProdukController::class, 'update'])->name('management_produk.update_menu');
        Route::delete('/delete-menu/{id}', [ManagementProdukController::class, 'delete'])->name('management_produk.delete_menu');
        Route::get('/pesanan', [PesananController::class, 'pesanan'])->name('superadmin.pesanan');
        Route::get('/transaksi', [TransaksiController::class, 'transaksi'])->name('superadmin.transaksi');
    });

    Route::middleware(['CheckUserRole:customer'])->group(function () {
        Route::get('/dashboard-customer', [CustomerController::class, 'index'])->name('customer.dashboard-customer');
        Route::get('/cart-customer', [CartController::class, 'cart'])->name('customer.cart-customer');
        
    });
});  

// Route::get('/register', 'RegisterController@showRegistrationForm');
// Route::post('/register', 'RegisterController@register');





require __DIR__.'/auth.php';
