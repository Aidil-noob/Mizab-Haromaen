<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::withCount('foto')->get();
        return view('admin.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|array|min:1',
            'foto.*' => 'image|max:2048',
        ]);

        $produk = Produk::create($request->only('nama_produk', 'deskripsi'));

        foreach ($request->file('foto') as $file) {
            $path = $file->store('produk', 'public');
            $produk->foto()->create(['path' => $path]);
        }

        return redirect()->route('admin.produk.index')->with('success', 'Produk ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        $produk->load('foto');
        return view('admin.produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        $produk->load('foto');
        return view('admin.produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'foto.*' => 'image|max:2048',
        ]);

        $produk->update($request->only('nama_produk', 'deskripsi'));

        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $file) {
                $path = $file->store('produk', 'public');
                $produk->foto()->create(['path' => $path]);
            }
        }

        return redirect()->route('admin.produk.index')->with('success', 'Produk diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        foreach ($produk->foto as $foto) {
            \Storage::disk('public')->delete($foto->path);
        }
        $produk->delete();

        return redirect()->route('admin.produk.index')->with('success', 'Produk dihapus');
    }
}
