@extends('layouts.template')

@section('content')

<div class="card p-4">
    <h4>Edit Jadwal</h4>

    <form action="{{ route('jadwal.update', $edit->id) }}" method="POST">
        @csrf
        @method('PUT')

        <select name="kode_matakuliah" class="form-control mb-2">
            @foreach($matakuliah as $m)
                <option value="{{ $m->kode_matakuliah }}"
                    {{ $edit->kode_matakuliah == $m->kode_matakuliah ? 'selected' : '' }}>
                    {{ $m->nama_matakuliah }}
                </option>
            @endforeach
        </select>

        <select name="nidn" class="form-control mb-2">
            @foreach($dosen as $d)
                <option value="{{ $d->nidn }}"
                    {{ $edit->nidn == $d->nidn ? 'selected' : '' }}>
                    {{ $d->nama }}
                </option>
            @endforeach
        </select>

        <input type="text" name="kelas" class="form-control mb-2" value="{{ $edit->kelas }}">
        <input type="text" name="hari" class="form-control mb-2" value="{{ $edit->hari }}">
        <input type="time" name="jam" class="form-control mb-2" value="{{ $edit->jam }}">

        <button class="btn btn-success">Update</button>
        <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection