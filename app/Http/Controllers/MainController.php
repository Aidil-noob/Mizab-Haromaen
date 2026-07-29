<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\Testimoni;

class MainController extends Controller
{
    public function index()
    {
        $paket = Paket::all();
        $testimoni = Testimoni::all();
        
        return view('index', compact('paket', 'testimoni'));
    }
}