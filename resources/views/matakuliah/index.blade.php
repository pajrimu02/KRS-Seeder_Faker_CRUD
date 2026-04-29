@extends('layouts.template')

@section('content')

<div class="row">
 
    <!-- FORM -->
    <div class="col-md-4">
        <div class="card p-3">
            <h5>Form Matakuliah</h5>

            <form action="{{ isset($edit) ? route('matakuliah.update', $edit->kode_matakuliah) : route('matakuliah.store') }}" method="POST">
                @csrf

                @if(isset($edit))
                    @method('PUT')
                @endif

                <input type="text" class="form-control mb-2" name="kode_matakuliah"
                    value="{{ isset($edit) ? $edit->kode_matakuliah : '' }}"
                    placeholder="Kode Matakuliah">

                <input type="text" class="form-control mb-2" name="nama_matakuliah"
                    value="{{ isset($edit) ? $edit->nama_matakuliah : '' }}"
                    placeholder="Nama Matakuliah">

                <input type="number" class="form-control mb-2" name="sks"
                    value="{{ isset($edit) ? $edit->sks : '' }}"
                    placeholder="SKS">

                <button class="btn btn-primary w-100">
                    {{ isset($edit) ? 'Update' : 'Simpan' }}
                </button>
            </form>
        </div>
    </div>

    <!-- DATA -->
    <div class="col-md-8">
        <div class="card p-3">
            <h5>Data Matakuliah</h5>

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <table class="table table-bordered text-center">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>SKS</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($matakuliah as $key => $m)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $m->kode_matakuliah }}</td>
                        <td>{{ $m->nama_matakuliah }}</td>
                        <td>{{ $m->sks }}</td>
                        <td>
                            <a href="{{ route('matakuliah.edit', $m->kode_matakuliah) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('matakuliah.destroy', $m->kode_matakuliah) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">
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