<?php

namespace App\Http\Controllers;

use App\Models\kategori_umkm;
use Illuminate\Http\Request;

class KategoriUmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_umkm =kategori_umkm::get();
        return view('admin.kategori_umkm.index', compact('kategori_umkm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori_umkm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            
        ]);

        // Create a new kategori_umkm instance with the validated data
        kategori_umkm::create([
            'nama' => $request->nama,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('kategori')->with('success', 'Kategori Umkm created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(kategori_umkm $kategori_umkm)
    {
        return view('admin.kategori_umkm.show' , compact('kategori_umkm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kategori_umkm $kategori_umkm)
    {
        return view('admin.kategori_umkm.edit' , compact('kategori_umkm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kategori_umkm $kategori_umkm)
    {
        $kategori_umkm->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('kategori')->with('success', 'kategori umkm updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kategori_umkm $kategori_umkm)
    {
        $kategori_umkm->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('kategori')->with('success', 'kategori umkm deleted successfully');
    }
}
