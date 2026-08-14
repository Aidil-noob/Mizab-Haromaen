<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FotoProdukController;
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
        Route::resource('produk', ProdukController::class);
        Route::delete('produk/{produk}/foto/{fotoProduk}', [FotoProdukController::class, 'destroy'])
            ->name('produk.foto.destroy');
    }
);

require __DIR__.'/auth.php';
