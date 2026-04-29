<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;


class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       Matakuliah::create([
    'kode_matakuliah' => $request->kode_matakuliah,
    'nama_matakuliah' => $request->nama_matakuliah,
    'sks' => $request->sks,
]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            Matakuliah::create([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks' => $request->sks,
        ]);

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data berhasil ditambahkan');
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
        $matakuliah = Matakuliah::all();
        $edit = Matakuliah::where('kode_matakuliah', $id)->firstOrFail();
        return view('matakuliah.edit', compact('edit', 'matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, string $id)
{
            $matkul = Matakuliah::where('kode_matakuliah', $id)->firstOrFail();

            $matkul->update([
                'kode_matakuliah' => $request->kode_matakuliah,
                'nama_matakuliah' => $request->nama_matakuliah,
                'sks' => $request->sks,
            ]);

            return redirect()->route('matakuliah.index')
                ->with('success', 'Data berhasil diupdate');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Matakuliah::destroy($id);

    return redirect()->route('matakuliah.index')
        ->with('success', 'Data berhasil dihapus');
    }
}
