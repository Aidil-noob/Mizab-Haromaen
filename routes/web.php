<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [MainController::class, 'index']);

Route::get('/dashboard', function () 
{
    // Cek email di dalam route
    if (Auth::user()->email !== 'mizab@admin') {
        abort(403, 'Akses Ditolak.');
    }

    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::middleware('auth')
    ->prefix('admin') // Mengatur URL di browser agar berawalan .../admin/...
    ->name('admin.') // Mengatur Nama Route di kode agar berawalan admin.
    ->group(function () 
    {
        Route::resource('paket', PaketController::class);
        Route::resource('testimoni', TestimoniController::class);
    }
);

require __DIR__.'/auth.php';
