<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Companycontroller;
use App\Http\Controllers\Roomcontroller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/company/index', [Companycontroller::class, 'index']);
Route::get('/room', [Roomcontroller::class, 'index']);
  
   