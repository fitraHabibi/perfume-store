<?php

use App\Models\Product;
use App\Models\Order;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Rute halaman utama
Route::get('/', [PublicController::class, 'index'])->name('home');

// Rute checkout
Route::get('/checkout/{product}', [PublicController::class, 'checkout'])->name('checkout');
Route::post('/checkout/{product}', [PublicController::class, 'storeOrder'])->name('order.store');

// Rute struk belanja
Route::get('/order-success/{id}', [PublicController::class, 'success'])->name('order.success');

Route::get('/dashboard', function () {
    // hitung isi data
    $totalProducts = Product::count();
    $totalOrders = Order::count();
    $pendingOrders = Order::where('status', 'pending')->count();

    // hitung omset dari status paid atau completed
    $revenue = Order::whereIn('status', ['paid', 'completed', 'shipped'])->sum('total_price');

    // kirim ke view
    return view('dashboard', compact('totalProducts', 'totalOrders', 'pendingOrders', 'revenue'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // daftarkan rute category di web
    Route::resource('categories', CategoryController::class);

    // daftarkan rute product di web
    Route::resource('products', ProductController::class);

    // daftarkan rute order di web
    Route::resource('orders', OrderController::class)->only(['index', 'update', 'destroy']);
});

require __DIR__.'/auth.php';
