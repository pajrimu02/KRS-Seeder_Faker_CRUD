@extends('layouts.template')

@section('content')

<div class="card p-4">
    <h4>Edit Dosen</h4>

    <form action="{{ route('dosen.update', $edit->nidn) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $edit->nama }}">
        </div>

        <div class="mb-3">
            <label>NIDN</label>
            <input type="text" name="nidn" class="form-control" value="{{ $edit->nidn }}">
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection