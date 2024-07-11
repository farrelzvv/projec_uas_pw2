<?php

namespace App\Http\Controllers;

use App\Models\umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $umkm = umkm:: get();
        return view('admin.umkm.index', compact('umkm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.umkm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kabkota_id' => 'required|exists:kabkota,id',
            'pembina_id' => 'required|exists:pembina,id',
            'nama' => 'required|string',
            'modal' => 'required|numeric',
            'pemilik' => 'required|string',
            'alamat' => 'required|string',
            'website' => 'required|string',
            'email' => 'required|string',
            'kategori_umkm_id' => 'required|exists:kategori_umkm,id',
        ]);

        // umkm::create($request->all());
        umkm::create([
            'kabkota_id' => $request->kabkota_id,
            'pembina_id' => $request->pembina_id,
            'nama' => $request->nama,
            'modal' => $request->modal,
            'pemilik' => $request->pemilik,
            'alamat' => $request->alamat,
            'website' => $request->website,
            'email' => $request->email,
            'kategori_umkm_id' => $request->kategori_umkm_id,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('umkm')->with('success', 'umkm created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(umkm $umkm)
    {
        return view('admin.umkm.show', compact('umkm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(umkm $umkm)
    {
        return view('admin.umkm.edit', compact('umkm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, umkm $umkm)
    {
        
        $umkm->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('umkm')->with('success', 'umkm updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(umkm $umkm)
    {
        $umkm->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('umkm')->with('success', 'umkm deleted successfully');
    }
}
