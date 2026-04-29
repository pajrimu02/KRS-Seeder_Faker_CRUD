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
            <h5>Form Dosen</h5>

            <form action="{{ isset($edit) ? route('dosen.update', $edit->id) : route('dosen.store') }}" method="POST">
    @csrf

    @if(isset($edit))
        @method('PUT')
    @endif

    <input type="text" class="form-control mb-2" name="nama"
           value="{{ isset($edit) ? $edit->nama : '' }}"
           placeholder="Nama Dosen">

    <input type="text" class="form-control mb-2" name="nidn"
           value="{{ isset($edit) ? $edit->nidn : '' }}"
           placeholder="NIDN">

    <button class="btn btn-primary w-100">
        {{ isset($edit) ? 'Update' : 'Simpan' }}
    </button>
</form>
        </div>
    </div>

    <!-- DATA -->
    <div class="col-md-8">
        <div class="card p-3">
            <h5>Data Dosen</h5>

            <table class="table table-bordered text-center">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIDN</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

             <tbody>
                @foreach($dosen as $key => $d)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->nidn }}</td>
                    <td>
                        
                        <a href="{{ route('dosen.edit', ['dosen' => $d->nidn]) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('dosen.destroy', ['dosen' => $d->nidn]) }}" method="POST" style="display:inline;">
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