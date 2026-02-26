<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColocationController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\is_member;
use App\Http\Middleware\is_owner;
use App\Http\Middleware\verified;
use App\Models\Category;

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::get('/password/request', [AuthController::class, 'showPasswordRequestForm'])->name('password.request');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
    Route::post('/password/email', [AuthController::class, 'sendPasswordResetLink'])->name('password.email');
    Route::get('/password/reset/{token}', [AuthController::class, 'showPasswordResetForm'])->name('password.reset');
    Route::post('/password/reset', [AuthController::class, 'resetPassword'])->name('password.update');
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware(['auth', verified::class])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'showHome'])->name('dashboard');
    Route::get('/Colocation/create', [ColocationController::class, 'create'])->name('create.Colocation');
    Route::post('/Colocation/store', [ColocationController::class, 'store'])->name('colocation.store');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard/admin', [HomeController::class, 'showAdminDashboard'])->name('dashboardAdmin');
});
Route::get('/dashboard/user', [HomeController::class, 'showUserDashboard'])
    ->name('dashboardUser')
    ->middleware(['auth', is_member::class]);
Route::get('/dashboard/owner', [HomeController::class, 'showOwnerDashboard'])
    ->name('dashboardOwner')
    ->middleware(['auth', is_owner::class]);

Route::get('/expenses', [HomeController::class, 'showExpenses'])->name('expenses');
Route::get('/colocation', [ColocationController::class, 'show'])->name('colocation.show');

Route::post('create_category' , [CategoryController::class, 'create'])->name('create_category');
