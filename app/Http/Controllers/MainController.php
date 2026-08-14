<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\Testimoni;
use App\Models\Produk;

class MainController extends Controller
{
    public function index()
    {
        $paket = Paket::all();
        $testimoni = Testimoni::all();
        $produk = Produk::with('foto')->get();
        
        return view('index', compact('paket', 'testimoni', 'produk'));
    }
}