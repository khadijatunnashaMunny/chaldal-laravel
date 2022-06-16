<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [FrontendController::class, 'home']);

Route::middleware(['auth','isAdmin'])->group(function () {
    //
    Route::get('/dashboard', [AdminController::class, 'Adminhome']);

   
});
Route::middleware(['auth','isCompany'])->group(function () {
    //
    Route::get('/iscompany', [CompanyController::class, 'Companyhome']);

   
});

