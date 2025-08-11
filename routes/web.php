<?php
use App\Http\Controllers\AdminAuthController;
?>
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\ProductController;

Route::get('/language/{lang}', [LanguageController::class, 'changeLocale'])->name('language');

Route::middleware('locale')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register')
        ]);
    })->name('welcome');

    // Route::get('/dashboard', function () {
    //     return Inertia::render('Dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

// MY ADMIN PAGES ROUTES ROUTES BEFORE FILAMENT
// Route::group(['prefix' => 'admin', 'middleware' => 'redirectAdmin'], function () {
//     Route::get('/login', [AdminAuthController::class, 'index'])->name('admin.login.index');
//     Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login');
// });

// Route::prefix('admin')->middleware(['admin', 'locale'])->group(function () {
//     Route::get('/form', [AdminController::class, 'index'])->name('admin.dashboard');

//     Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');


//     Route::get('/product', [ProductController::class, 'index'])->name('admin.product.index');
//     Route::post('/product/refresh', [ProductController::class, 'refresh'])->name('admin.product.refresh');
//     Route::post('/product', [ProductController::class, 'store'])->name('admin.product.store');
//     Route::patch('/product/{product}', [ProductController::class, 'update'])->name('admin.product.update');
// });


require __DIR__ . '/auth.php';
