@extends('layouts.template')

@section('content')

<div class="row">
{{-- Notification --}}
    <div class="mt-4 col-md-12">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    
    <!-- FORM -->
    <div class="col-md-4">
        <div class="card p-3">
            <h5>Form Mahasiswa</h5>

            <form action="{{ isset($edit) ? route('mahasiswa.update', $edit->npm) : route('mahasiswa.store') }}" method="POST">
                @csrf

                @if(isset($edit))
                    @method('PUT')
                @endif

                <input type="text" class="form-control mb-2" name="npm"
                    value="{{ isset($edit) ? $edit->npm : '' }}"
                    placeholder="NPM">

                <input type="text" class="form-control mb-2" name="nama"
                    value="{{ isset($edit) ? $edit->nama : '' }}"
                    placeholder="Nama Mahasiswa">

                <select name="nidn" class="form-control mb-2">
                    <option value="">-- Pilih Dosen --</option>
                    @foreach($dosen as $d)
                        <option value="{{ $d->nidn }}"
                            {{ isset($edit) && $edit->nidn == $d->nidn ? 'selected' : '' }}>
                            {{ $d->nama }}
                        </option>
                    @endforeach
                </select>

                <button class="btn btn-primary w-100">
                    {{ isset($edit) ? 'Update' : 'Simpan' }}
                </button>
            </form>
        </div>
    </div>

    <!-- DATA -->
    <div class="col-md-8">
        <div class="card p-3">
            <h5>Data Mahasiswa</h5>

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <table class="table table-bordered text-center">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>NIDN</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($mahasiswa as $key => $m)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $m->npm }}</td>
                        <td>{{ $m->nama }}</td>
                        <td>{{ $m->nidn }}</td>
                        <td>
                            <a href="{{ route('mahasiswa.edit', $m->npm) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('mahasiswa.destroy', $m->npm) }}" method="POST" style="display:inline;">
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