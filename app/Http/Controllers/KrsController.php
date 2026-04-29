<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\krs;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;


class KrsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $krs = krs::all();
        $mahasiswa = Mahasiswa::all();
        $matakuliah = Matakuliah::all();
        return view('krs.index', compact('krs', 'mahasiswa', 'matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'npm' => 'required',
            'kode_matakuliah' => 'required'
        ]);
        krs::create([
            'npm' => $request->npm,
            'kode_matakuliah' => $request->kode_matakuliah
        ]);
        return redirect()->route('krs.index')->with('success', 'Data berhasil ditambahkan');
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
        $krs = krs::all();
        $mahasiswa = Mahasiswa::all();
        $matakuliah = Matakuliah::all();
        $edit = krs::where('id', $id)->firstOrFail();
        return view('krs.edit', compact('edit', 'krs', 'mahasiswa', 'matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $krs = krs::where('id', $id)->firstOrFail();
        $krs->update([
            'npm' => $request->npm,
            'kode_matakuliah' => $request->kode_matakuliah
        ]);

        return redirect()->route('krs.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        krs::destroy($id);
        return redirect()->route('krs.index')->with('success', 'Data berhasil dihapus');
    }
}
