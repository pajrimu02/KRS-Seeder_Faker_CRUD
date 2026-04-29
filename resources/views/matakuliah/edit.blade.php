@extends('layouts.template')

@section('content')

<div class="card p-4">
    <h4>Edit Matakuliah</h4>

    <form action="{{ route('matakuliah.update', $edit->kode_matakuliah) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Kode Matakuliah</label>
            <input type="text" name="kode_matakuliah" class="form-control" value="{{ $edit->kode_matakuliah }}">
        </div>

        <div class="mb-3">
            <label>Nama Matakuliah</label>
            <input type="text" name="nama_matakuliah" class="form-control" value="{{ $edit->nama_matakuliah }}">
        </div>

        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control" value="{{ $edit->sks }}">
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection