<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [MainController::class, 'index']);



Route::middleware(['auth', 'admin.only'])
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard'); 

        Route::prefix('admin')
            ->name('admin.')
            ->group(function () {
                Route::resource('paket', PaketController::class);
                Route::resource('testimoni', TestimoniController::class);
            });
    });

require __DIR__.'/auth.php';
