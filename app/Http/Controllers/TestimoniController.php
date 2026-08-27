<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('admin.testimoni.index', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'url' => 'required|url'
        ],
        [
            'url.required' => 'Tautan wajib diisi!',
            'url.url' => 'Tautan tidak valid!'
        ],
        [
            'url' => 'Tautan'
        ]);

        Testimoni::create($validate);

        return redirect()
            ->route('admin.testimoni.index')
            ->with('success', 'Video Testimoni Berhasil Diunggah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimoni $testimoni)
    {
        return view('admin.testimoni.show', compact('testimoni'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimoni $testimoni)
    {
        return view('admin.testimoni.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        $validate = $request->validate([
            'url' => 'required|url'
        ],
        [
            'url.required' => 'Tautan wajib diisi!',
            'url.url' => 'Tautan tidak valid!'
        ],
        [
            'url' => 'Tautan'
        ]);

        $paket->update($validate);

        return redirect()
            ->route('admin.testimoni.index')
            ->with('success', 'Video Testimoni Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni)
    {
        $testimoni->delete();

        return redirect()
            ->route('admin.testimoni.index')
            ->with('success', 'Video Testimoni Berhasil Dihapus');
    }
}
