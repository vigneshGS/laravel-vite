<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AiapplicationController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ComponentpageController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RoleandaccessController;
use App\Http\Controllers\CryptocurrencyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UniversitiesController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\SettingsController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login', [UsersController::class, 'login'])->name('login');
Route::get('/register', [UsersController::class, 'register'])->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });

    Route::controller(UsersController::class)->group(function () {
        Route::get('/profiles', 'profiles')->name('profiles');
        Route::get('/permissions', 'permissions')->name('permissions');
        Route::get('/forgot-password', 'forgotPassword')->name('forgotPassword');
        Route::get('/lock-screen', 'lockScreen')->name('lockScreen');  
        Route::get('/userlist', 'userList')->name('userList');
    });

    Route::controller(AdmissionController::class)->middleware('role:admin')->group(function () {
        Route::get('/admission', 'admission')->name('admission');
        Route::get('/activity', 'activity')->name('activity');
    });
  
    Route::controller(UniversitiesController::class)->group(function () {
        Route::get('/university', 'university')->name('university');
        Route::get('/programs', 'programs')->name('programs');
    });

    Route::controller(PromoController::class)->group(function () {
        Route::get('/leads', 'leads')->name('leads');
        Route::get('/referals', 'referals')->name('referals');
    });

    Route::controller(AccountingController::class)->group(function () {
        Route::get('/invoice', 'invoice')->name('invoice');
        Route::get('/ledger', 'ledger')->name('ledger');
    });

    Route::controller(SettingsController::class)->group(function () {
        Route::get('/commissions', 'commissions')->name('commissions');
        Route::get('/payment', 'payment')->name('payment');
    });
});

require __DIR__.'/auth.php';
