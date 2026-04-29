<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        $dosen = Dosen::all();
        return view('mahasiswa.index', compact('mahasiswa', 'dosen'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        nahasisawa::create([
            'npm' => $request->npm,
            'nidn' => $request->nidn,
            'nama' => $request->nama
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mahasiswa::create([
            'npm' => $request->npm,
            'nidn' => $request->nidn,
            'nama' => $request->nama
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil ditambahkan');  
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
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::all();
        $dosen = Dosen::all();
        $edit = Mahasiswa::where('npm', $id)->firstOrFail();
        return view('mahasiswa.edit', compact('edit', 'mahasiswa', 'dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mhs = Mahasiswa::where('npm', $id)->firstOrFail();
        $mhs->update([
            'npm' => $request->npm,
            'nidn' => $request->nidn,
            'nama' => $request->nama
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mahasiswa::destroy($id);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus');
    }
}
