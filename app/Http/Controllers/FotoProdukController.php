<?php

namespace App\Http\Controllers;

use App\Models\FotoProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoProdukController extends Controller
{   
    public function destroy(Produk $produk, FotoProduk $fotoProduk)
    {
        if ($fotoProduk->path) {
            Storage::disk('public')->delete($fotoProduk->path);
        }
        $fotoProduk->delete();

        return back()->with('success', 'Foto dihapus');
    }
}
