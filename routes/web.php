<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PaketController::class, 'index'])->name('paket');