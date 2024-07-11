<?php

namespace App\Http\Controllers;

use App\Models\kabkota;
use Illuminate\Http\Request;

class KabkotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kabkota = kabkota::get();
        return view('admin.kabkota.index',  compact('kabkota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.kabkota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:45',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'provinsi_id' => 'required|exists:provinsi,id',
        ]);

        kabkota::create($request->all());

        return redirect()->route('kabkota')->with('success', 'kabkota created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(kabkota $kabkota)
    {
        return view('admin.kabkota.show', compact('kabkota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kabkota $kabkota)
    {
        return view('admin.kabkota.edit', compact('kabkota'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kabkota $kabkota)
    {
        $kabkota->update($request->all());

        return redirect()->route('kabkota')->with('success', 'Pasien updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kabkota $kabkota)
    {
          // Delete the province instance
          $kabkota->delete();

          // Redirect back to the index page with a success message
          return redirect()->route('kabkota')->with('success', 'province deleted successfully');
    }
}
