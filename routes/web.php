<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;



Auth::routes();
Route::post('/loginhere', [FrontendController::class, 'LoginSubmit']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [FrontendController::class, 'home']);
Route::get('/product_detail/{id}', [FrontendController::class, 'product_detail']);
Route::post('/add_to_cart', [FrontendController::class, 'add_to_cart']);
Route::get("/cartlist", [FrontendController::class, 'cartList']);
Route::get("/orderPage", [FrontendController::class, 'orderPage']);
Route::post("/orderplace", [FrontendController::class, 'orderPlace']);
Route::get("/removecart/{id}", [FrontendController::class, 'removeCart']);


Route::middleware(['auth','isAdmin'])->group(function () {
    //
    Route::get('/dashboard', [AdminController::class, 'Adminhome']);
    Route::post('/registerSubmit', [AdminController::class, 'registerdata']);

   
});
Route::middleware(['auth','isCompany'])->group(function () {
    //
    Route::get('/iscompany', [CompanyController::class, 'Companyhome']);
    Route::post('/category_submit', [CompanyController::class, 'categorySubmit']);
    Route::get('/product', [CompanyController::class, 'product']);
    Route::post('/product_Submit', [CompanyController::class, 'productSubmit']);

   
});

