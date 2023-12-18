<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\FrontendProductController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Frontend\UserProfileController;
use Gloudemans\Shoppingcart\Facades\Cart;

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
// AUTHENTICATION 


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('admin/dashboard', [AdminController::class,'dashboard'])->middleware(['auth', 'role:admin'])->name('admin.dashboard');


// Trang home cua khach hang
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('customer/dashboard', [CustomerController::class,'dashboard'])->name('customer.dashboard');

// Sau khi khách hàng đăng nhập
Route::group(['middleware' => ['auth', 'verified']], function(){ 
    Route::get('customer/dashboard', [UserDashboardController::class, 'index'])->name('customer.dashboard');
    Route::get('customer/profile', [UserProfileController::class, 'index'])->name('customer.profile');
    Route::put('customer/profile', [UserProfileController::class, 'updateProfile' ])->name('customer.profile.update');
    Route::post('customer/profile', [UserProfileController::class, 'updatePassword' ])->name('customer.profile.update.password');

});

// admin đăng nhập tại route
Route::get('admin/login', [AdminController::class , 'login'])->name('admin.login');

// Product detail route
Route::get('product-detail/{name}', [FrontendProductController::class, 'showProduct'])->name('product-detail');

// Route thêm sp vào giỏ hàng
    Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
    Route::get('cart-details', [CartController::class, 'cartDetails'])->name('cart-details');
    Route::post('cart/update-quantity', [CartController::class, 'updateProductQty'])->name('cart.update-quantity');
    Route::get('clear-cart', [CartController::class, 'clearCart'])->name('clear.cart');
    Route::get('cart/remove-product/{rowId}', [CartController::class, 'removeProduct'])->name('cart.remove-product');
    Route::get('cart-count', [CartController::class, 'getCartCount'])->name('cart-count');

    Route::get('cart/total', [CartController::class, 'cartTotal'])->name('cart.total');
    

