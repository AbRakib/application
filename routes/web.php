<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/applications', [ApplicationController::class, 'store'])->name('application.store');

Route::get('/application/thank-you', function () {
    if (!session()->has('application_submitted')) {
        return redirect('/');
    }
    return view('thankyou');
})->name('application.thankyou');

Route::get('/admin-login', [LoginController::class, 'login'])->name('login');
Route::post('/admin-access', [LoginController::class, 'checkLogin'])->name('access.login');



Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    // Dashboard Route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/applications', [DashboardController::class, 'applications'])->name('application');
    Route::get('/get-applications', [DashboardController::class, 'getData'])->name('get.applications');

    // Admin logout 
    Route::get('/admin-logout', [LoginController::class, 'logout'])->name('logout');
});
