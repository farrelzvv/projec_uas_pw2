<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinsi = provinsi::get();
        return view('admin.provinsi.index',  compact('provinsi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'ibukota' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        
        try {
            Provinsi::create($request->all());

            return response()->json([
                'success' => true,
                'message' => 'Province created successfully.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while creating the province.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Provinsi $provinsi)
    {
        return view('admin.provinsi.show', compact('provinsi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provinsi $provinsi)
    {
        return view('admin.provinsi.edit',compact('provinsi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Provinsi $provinsi)
    {
        $provinsi->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Province updated successfully.'
    ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provinsi $provinsi)
    {
         // Delete the province instance
         $provinsi->delete();

         // Redirect back to the index page with a success message
         return redirect()->route('provinsi')->with('success', 'province deleted successfully');
    }
}
