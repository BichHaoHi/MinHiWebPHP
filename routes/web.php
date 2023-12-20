<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\Frontend\DetailProductController;
use App\Http\Controllers\Frontend\FeedbackController;
use App\Http\Controllers\Frontend\ProductController;


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

// Cus xem ds các sản phẩm 
Route::get('/products', [ProductController::class,'show_list'])->name('products_gridview');

// Customer xem chi tiết sản phẩm 
Route::get('/products/{id}', [DetailProductController::class, 'show'])->name('show_detail_product');

//Cus feedback sản phẩm
Route::post('/submit-feedback', 'FeedbackController@submitFeedback');

//Cus cập nhật profile
Route::get('/users/{id}/edit', [UserProfileController::class, 'update_profile'])->name('profile.edit');
Route::put('/users/{id}', [UserProfileController::class, 'updateprofile'])->name('profile.update');
