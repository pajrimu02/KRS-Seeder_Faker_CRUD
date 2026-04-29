@extends('layouts.template')

@section('content')

<div class="card p-4">
    <h4>Edit KRS</h4>

    <form action="{{ route('krs.update', $edit->id) }}" method="POST">
        @csrf
        @method('PUT')

        <select name="npm" class="form-control mb-2">
            @foreach($mahasiswa as $m)
                <option value="{{ $m->npm }}"
                    {{ $edit->npm == $m->npm ? 'selected' : '' }}>
                    {{ $m->nama }}
                </option>
            @endforeach
        </select>

        <select name="kode_matakuliah" class="form-control mb-2">
            @foreach($matakuliah as $mk)
                <option value="{{ $mk->kode_matakuliah }}"
                    {{ $edit->kode_matakuliah == $mk->kode_matakuliah ? 'selected' : '' }}>
                    {{ $mk->nama_matakuliah }}
                </option>
            @endforeach
        </select>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('krs.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection