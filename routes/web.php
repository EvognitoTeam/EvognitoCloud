<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DevicesController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TemplatesController;
use App\Http\Controllers\AutomationsController;

// Route::get('/', function () {
//     return view('app');
// });

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [UsersController::class, 'login'])->name('login.submit');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [UsersController::class, 'register'])->name('register.submit');

Route::get('/about_us', function () {
    return view('about');
})->name('about');

// Dashboard routes (simulated authentication for static content)
Route::prefix('dashboard')->middleware(['set.locale', 'auth.redirect'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Devices Routes
    Route::get('/devices', [DevicesController::class, 'index'])->name('dashboard.devices.index');
    Route::get('/devices/create', [DevicesController::class, 'create'])->name('dashboard.devices.create');

    // Templates Routes
    Route::get('/templates', [TemplatesController::class, 'index'])->name('dashboard.templates');

    // NEW ROUTES
    Route::get('/automations', [AutomationsController::class, 'index'])->name('dashboard.automations');
    Route::get('/data-history', [HistoryController::class, 'index'])->name('dashboard.data_history');
    Route::get('/users', [UsersController::class, 'index'])->name('dashboard.users');
    // END NEW ROUTES

    // Settings Route
    Route::get('/settings', [SettingsController::class, 'index'])->name('dashboard.settings');
    Route::post('/set-locale', [SettingsController::class, 'setLocale'])->name('set.locale');

    // Logout route
    Route::get('/logout', [UsersController::class, 'logout'])->name('logout');
});
