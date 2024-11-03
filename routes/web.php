<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;


// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('admin/guru', [AdminController::class, 'admin'])->name('guru');
