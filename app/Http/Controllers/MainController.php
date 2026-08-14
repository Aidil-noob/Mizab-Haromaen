<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index()
    {
        $paket = Paket::all();
        $pkt = Paket::all();
        $testimoni = Testimoni::all();
        $gambarHotel = Storage::disk('public')->files('hotel');

        $umroh = $pkt->zip($gambarHotel);
        
        return view('index', compact('paket', 'testimoni', 'umroh'));
    }
}