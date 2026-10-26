<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $validate = $request->validate([
            'nama_paket' => 'required|string|regex:/^[a-zA-Z\s]+$/',
            'gambar' => 'required|image|mimes:jpeg,jpg,png,webp|max:2048',
            'nama_hotel_madinah' => 'required|string|regex:/^[a-zA-Z\s]+$/',
            'nama_hotel_makkah' => 'required|string|regex:/^[a-zA-Z\s]+$/',
            'rating' => 'required|integer',
            'seat' => 'required|integer|min:0',
            'tgl_keberangkatan' => 'required|date',
            'harga' => 'required|integer'
        ],
        [
            'nama_paket.required' => 'Nama paket wajib diisi!',
            'nama_paket.string' => 'Nama paket hanya boleh menggunakan huruf!',
            'nama_paket.regex' => 'Nama paket hanya boleh menggunakan huruf!',
            'gambar.required' => 'Gambar paket wajib diupload!',
            'gambar.image' => 'File harus berupa gambar!',
            'gambar.mimes' => 'Gambar harus berformat jpeg, jpg, png, atau webp!',
            'gambar.max' => 'Ukuran gambar maksimal 2MB!',
            'nama_hotel_madinah.required' => 'Nama hotel madinah wajib diisi!',
            'nama_hotel_madinah.string' => 'Nama hotel madinah hanya boleh menggunakan huruf',
            'nama_hotel_madinah.regex' => 'Nama hotel madinah hanya boleh menggunakan huruf',
            'nama_hotel_makkah.required' => 'Nama hotel makkah wajib diisi!',
            'nama_hotel_makkah.string' => 'Nama hotel makkah hanya boleh menggunakan huruf',
            'nama_hotel_makkah.regex' => 'Nama hotel makkah hanya boleh menggunakan huruf',
            'rating.required' => 'Rating hotel wajib diisi!',
            'rating.integer' => 'Rating hotel hanya boleh berupa angka!',
            'seat.required' => 'Jumlah seat wajib diisi!',
            'seat.integer' => 'Seat hanya boleh berupa angka!',
            'seat.min' => 'Seat tidak boleh kurang dari 0!',
            'tgl_keberangkatan.required' => 'Tanggal keberangkatan wajib diisi!',
            'tgl_keberangkatan.date' => 'Tanggal keberangkatan tidak valid!',
            'harga.required' => 'Harga paket wajib diisi!',
            'harga.integer' => 'Harga paket hanya boleh berupa angka!'
        ],
        [
            'nama_paket' => 'Nama Paket Umroh',
            'gambar' => 'Gambar Paket',
            'nama_hotel_madinah' => 'Nama Hotel Madinah',
            'nama_hotel_makkah' => 'Nama Hotel Makkah',
            'rating' => 'Kualitas Fasilitas Hotel',
            'seat' => 'Sisa Seat',
            'tgl_keberangkatan' => 'Tanggal Keberangkatan',
            'harga' => 'Harga Paket Umroh'
        ]);

        $validate['gambar'] = $request->file('gambar')->store('paket', 'public');

        Paket::create($validate);

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
        $validate = $request->validate([
            'nama_paket' => 'required|string|regex:/^[a-zA-Z\s]+$/',
            'gambar' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            'nama_hotel_madinah' => 'required|string|regex:/^[a-zA-Z\s]+$/',
            'nama_hotel_makkah' => 'required|string|regex:/^[a-zA-Z\s]+$/',
            'rating' => 'required|integer',
            'seat' => 'required|integer|min:0',
            'tgl_keberangkatan' => 'required|date',
            'harga' => 'required|integer'
        ],
        [
            'nama_paket.required' => 'Nama paket wajib diisi!',
            'nama_paket.string' => 'Nama paket hanya boleh menggunakan huruf!',
            'nama_paket.regex' => 'Nama paket hanya boleh menggunakan huruf!',
            'gambar.image' => 'File harus berupa gambar!',
            'gambar.mimes' => 'Gambar harus berformat jpeg, jpg, png, atau webp!',
            'gambar.max' => 'Ukuran gambar maksimal 2MB!',
            'nama_hotel_madinah.required' => 'Nama hotel madinah wajib diisi!',
            'nama_hotel_madinah.string' => 'Nama hotel madinah hanya boleh menggunakan huruf',
            'nama_hotel_madinah.regex' => 'Nama hotel madinah hanya boleh menggunakan huruf',
            'nama_hotel_makkah.required' => 'Nama hotel makkah wajib diisi!',
            'nama_hotel_makkah.string' => 'Nama hotel makkah hanya boleh menggunakan huruf',
            'nama_hotel_makkah.regex' => 'Nama hotel makkah hanya boleh menggunakan huruf',
            'rating.required' => 'Rating hotel wajib diisi!',
            'rating.integer' => 'Rating hotel hanya boleh berupa angka!',
            'seat.required' => 'Jumlah seat wajib diisi!',
            'seat.integer' => 'Seat hanya boleh berupa angka!',
            'seat.min' => 'Seat tidak boleh kurang dari 0!',
            'tgl_keberangkatan.required' => 'Tanggal keberangkatan wajib diisi!',
            'tgl_keberangkatan.date' => 'Tanggal keberangkatan tidak valid!',
            'harga.required' => 'Harga paket wajib diisi!',
            'harga.integer' => 'Harga paket hanya boleh berupa angka!'
        ],
        [
            'nama_paket' => 'Nama Paket Umroh',
            'gambar' => 'Gambar Paket',
            'nama_hotel_madinah' => 'Nama Hotel Madinah',
            'nama_hotel_makkah' => 'Nama Hotel Makkah',
            'rating' => 'Kualitas Fasilitas Hotel',
            'seat' => 'Sisa Seat',
            'tgl_keberangkatan' => 'Tanggal Keberangkatan',
            'harga' => 'Harga Paket Umroh'
        ]);

        if ($request->hasFile('gambar')) {
            if ($paket->gambar) {
                Storage::disk('public')->delete($paket->gambar);
            }
            $validate['gambar'] = $request->file('gambar')->store('paket', 'public');
        } else {
            unset($validate['gambar']);
        }

        $paket->update($validate);

        return redirect()
            ->route('admin.paket.index')
            ->with('success', 'Paket Umroh berhasil Diperbarui');
    }

    public function destroy(Paket $paket)
    {
        if ($paket->gambar) {
            Storage::disk('public')->delete($paket->gambar);
        }

        $paket->delete();

        return redirect()
            ->route('admin.paket.index')
            ->with('success', 'Paket Umroh Berhasil Dihapus');
    }
}
