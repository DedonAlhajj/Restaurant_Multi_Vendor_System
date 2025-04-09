<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Auth\CustomerAuthController;
use App\Http\Controllers\FrontEnd\CartController;
use App\Http\Controllers\FrontEnd\InvoiceController;
use App\Http\Controllers\FrontEnd\LikeController;
use App\Http\Controllers\FrontEnd\OrderController;
use App\Http\Controllers\FrontEnd\OrderRatingAndCommentController;
use App\Http\Controllers\FrontEnd\VendorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\SellerDashboardController;
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
    return view('customer.invoice');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});


Route::middleware(['auth', 'role:Seller', 'checkSellerStatus'])->group(function () {
    Route::get('/seller/dashboard', [SellerDashboardController::class, 'index'])->name('seller.dashboard');
});

// صفحة الانتظار يجب أن تكون خارج middleware التحقق من حالة البائع حتى لا يحدث إعادة توجيه لانهائية
Route::middleware(['auth', 'role:Seller'])->group(function () {
    Route::get('/seller/waiting', [SellerController::class, 'index'])->name('seller.waiting');
});

////////////////////////////////////////frontend/////////////////////////////////////



require __DIR__ . '/auth.php';
Route::get('/not-found', function () {
    return view(view: 'customer.error');
})->name('not.found');
Route::group(['prefix' => '{vendor_slug}', 'middleware' => 'check.vendor.slug'], function () {
    //Route::get('/', [VendorController::class, 'showMenu'])->name('vendor.menu');

    Route::get('/', [VendorController::class, 'welcome'])->name('vendor.welcome');
    Route::get('/index', [VendorController::class, 'index'])->name('vendor.index');
    Route::get('/menu', [VendorController::class, 'showMenu'])->name('vendor.menu');
    Route::get('/menu/product/{product_id}', [VendorController::class, 'showFoodItem'])->name('vendor.menu.fooditem');
    Route::get('/notifications', [VendorController::class, 'showNotifications'])->name('vendor.notifications');

    Route::get('/categories/{subcategoryId}/products', [VendorController::class, 'getProductsByCategory'])
        ->name('vendor.categories.products');
    Route::get('/menu/category/{category_id}', [VendorController::class, 'showtocategory'])->name('vendor.menu.category');



    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
    Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');



    Route::middleware('Auth.vendor.check')->group(function () {
        Route::get('customer/login', [CustomerAuthController::class, 'loginForm'])->name('customer.login');
        Route::post('customer/login', [CustomerAuthController::class, 'login'])->name('customer.store');
        Route::get('customer/register', [CustomerAuthController::class, 'registerForm'])->name('customer.register');
        Route::post('customer/register', [CustomerAuthController::class, 'register']);
    });
    Route::get('customer/logout', [CustomerAuthController::class, 'logout'])->name('customer.logout');
    Route::middleware('auth.customer')->group(function () {
        Route::get('order/confirmation', [OrderController::class, 'confirmation'])->name('order.confirmation');
        Route::get('order/invoice/{order_Id}', [InvoiceController::class, 'viewInvoice'])->name('order.invoice');
        Route::get('/order/{orderId}/download-invoice', [InvoiceController::class, 'downloadInvoice'])
            ->name('order.downloadInvoice');
        Route::post('order/complete', [OrderController::class, 'completeOrder'])->name('order.complete');
        Route::get('order/history', [OrderController::class, 'history'])->name('order.history');
        Route::get('/my-orders', [OrderController::class, 'customerOrder'])->name('customer.orders');

        Route::get('food-items/{foodItem}/ratings-comments', [OrderRatingAndCommentController::class, 'index'])->name('ratings-comments.index');
        Route::get('food-items/{foodItem}/ratings-comments/create', [OrderRatingAndCommentController::class, 'create'])->name('ratings-comments.create');
        Route::post('food-items/{foodItem}/ratings-comments', [OrderRatingAndCommentController::class, 'store'])->name('ratings-comments.store');
        Route::get('ratings-comments/{id}/edit', [OrderRatingAndCommentController::class, 'edit'])->name('ratings-comments.edit');
        Route::put('ratings-comments/{id}', [OrderRatingAndCommentController::class, 'update'])->name('ratings-comments.update');
        Route::delete('ratings-comments/{id}', [OrderRatingAndCommentController::class, 'destroy'])->name('ratings-comments.destroy');






        Route::post('/food-items/{foodItemId}/like', [LikeController::class, 'toggleLike'])
            ->middleware('auth:customer') // التأكد أن الزبون مصادق عليه
            ->name('food-items.like');

        // جلب عدد اللايكات لعنصر معين
        Route::get('/food-items/{foodItemId}/likes-count', [LikeController::class, 'getLikesCount'])
            ->name('food-items.likes-count');
    });
});
