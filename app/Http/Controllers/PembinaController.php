<?php

namespace App\Http\Controllers;

use App\Models\pembina;
use Illuminate\Http\Request;

class PembinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembina = pembina::get();
        return view('admin.pembina.index',  compact('pembina'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pembina.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'gender' => 'required|string',
            'tgl_lahir' => 'required|date',
            'tmp_lahir' => 'required|string',
            'keahlian' => 'required|string',
        ]);

        pembina::create([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'tgl_lahir' => $request->tgl_lahir,
            'tmp_lahir' => $request->tmp_lahir,
            'keahlian' => $request->keahlian,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('pembina')->with('success', 'Pasien created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(pembina $pembina)
    {
        return view('admin.pembina.show', compact('pembina'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pembina $pembina)
    {
        return view('admin.pembina.edit', compact('pembina'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pembina $pembina)
    {
        $pembina->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('pembina')->with('success', 'pembina updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pembina $pembina)
    {
        $pembina->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('pembina')->with('success', 'pembina deleted successfully');
    }
}
