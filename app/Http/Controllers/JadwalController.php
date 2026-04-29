<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Dosen;
use App\Models\Matakuliah;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        $dosen = Dosen::all();
        $matakuliah = Matakuliah::all();
        return view('jadwal.index', compact('jadwal', 'dosen', 'matakuliah'));
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
        Jadwal::create([
            'nidn' => $request->nidn,
            'kode_matakuliah' => $request->kode_matakuliah,
            'kelas' => $request->kelas,
            'hari' => $request->hari,
            'jam' => $request->jam
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Data berhasil ditambahkan');
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
        $jadwal = Jadwal::all();
        $dosen = Dosen::all();
        $matakuliah = Matakuliah::all();
        $edit = Jadwal::where('id', $id)->firstOrFail();
        return view('jadwal.edit', compact('edit', 'jadwal', 'dosen', 'matakuliah'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jadwal = Jadwal::where('id', $id)->firstOrFail();
        $jadwal->update([
            'nidn' => $request->nidn,
            'kode_matakuliah' => $request->kode_matakuliah,
            'hari' => $request->hari,
            'jam' => $request->jam
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jadwal::destroy($id);

        return redirect()->route('jadwal.index')->with('success', 'Data berhasil dihapus'); 
    }
}
