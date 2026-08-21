<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;

class PaketController extends Controller
{
    public function index()
    {
        $paket = Paket::all();
        return view('admin.paket.index', compact('paket'));
    }

    public function create()
    {
        return view('admin.paket.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required',
            'nama_hotel_madinah' => 'required',
            'nama_hotel_makkah' => 'required',
            'rating' => 'required|integer',
            'harga' => 'required|integer'
        ]);
        
        Paket::create($request->all());

        return redirect()
            ->route('admin.paket.index')
            ->with('success', 'Paket Umroh Berhasil Ditambahkan!');
    }

    public function edit(Paket $paket)
    {
        return view('admin.paket.edit', compact('paket'));
    }

    public function update(Request $request, Paket $paket)
    {
        $request->validate([
            'nama_paket' => 'required',
            'nama_hotel_madinah' => 'required',
            'nama_hotel_makkah' => 'required',
            'rating' => 'required|integer',
            'harga' => 'required|integer'
        ]);

        $paket->update($request->all());

        return redirect()
            ->route('admin.paket.index')
            ->with('success', 'Paket Umroh berhasil Diperbarui');
    }

    public function destroy(Paket $paket)
    {
        $paket->delete();

        return redirect()
            ->route('admin.paket.index')
            ->with('success', 'Paket Umroh Berhasil Dihapus');
    }
}
