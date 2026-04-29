<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Dosen::create([
            'nama' => $request->nama,
            'nidn' => $request->nidn
        ]);

        return redirect()->route('dosen.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nidn)
    {
        $edit = Dosen::where('nidn', $nidn)->firstOrFail();
        $dosen = Dosen::all();
        return view('dosen.edit', compact('edit', 'dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nidn)
    {
        $dosen = Dosen::where('nidn', $nidn)->firstOrFail();
        $dosen->update([
            'nama' => $request->nama,
            'nidn' => $request->nidn
        ]);

        return redirect()->route('dosen.index')
            ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
 public function destroy($nidn)
{
    $dosen = Dosen::where('nidn', $nidn)->firstOrFail();
    $dosen->delete();

    return redirect()->back()
        ->with('success', 'Data berhasil dihapus');
}
}
