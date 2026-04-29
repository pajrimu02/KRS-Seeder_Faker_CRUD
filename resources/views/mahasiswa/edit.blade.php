@extends('layouts.template')

@section('content')

<div class="card p-4">
    <h4>Edit Mahasiswa</h4>

    <form action="{{ route('mahasiswa.update', $edit->npm) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>NPM</label>
            <input type="text" name="npm" class="form-control" value="{{ $edit->npm }}" readonly>
        </div>

        <div class="mb-3">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama" class="form-control" value="{{ $edit->nama }}">
        </div>

        <div class="mb-3">
            <label>Dosen</label>
            <select name="nidn" class="form-control">
                @foreach($dosen as $d)
                    <option value="{{ $d->nidn }}"
                        {{ $edit->nidn == $d->nidn ? 'selected' : '' }}>
                        {{ $d->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection