@extends('layouts.template')

@section('content')

<div class="row">

    <!-- FORM -->
    <div class="col-md-4">
        <div class="card p-3">
            <h5>Form KRS</h5>

            <form action="{{ route('krs.store') }}" method="POST">
                @csrf

                <select name="npm" class="form-control mb-2">
                    <option value="">-- Pilih Mahasiswa --</option>
                    @foreach($mahasiswa as $m)
                        <option value="{{ $m->npm }}">
                            {{ $m->nama }}
                        </option>
                    @endforeach
                </select>

                <select name="kode_matakuliah" class="form-control mb-2">
                    <option value="">-- Pilih Matakuliah --</option>
                    @foreach($matakuliah as $mk)
                        <option value="{{ $mk->kode_matakuliah }}">
                            {{ $mk->nama_matakuliah }}
                        </option>
                    @endforeach
                </select>

                <button class="btn btn-primary w-100">Ambil</button>
            </form>
        </div>
    </div>

    <!-- DATA -->
    <div class="col-md-8">
        <div class="card p-3">
            <h5>Data KRS</h5>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered text-center">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Mahasiswa</th>
                        <th>Matakuliah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($krs as $key => $k)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $k->mahasiswa->nama ?? '-' }}</td>
                        <td>{{ $k->matakuliah->nama_matakuliah ?? '-' }}</td>
                        <td>
                            <a href="{{ route('krs.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('krs.destroy', $k->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

</div>

@endsection