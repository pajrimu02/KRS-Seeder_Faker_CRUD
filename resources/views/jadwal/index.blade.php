@extends('layouts.template')

@section('content')

<div class="row">

    <!-- FORM -->
    <div class="col-md-4">
        <div class="card p-3">
            <h5>Form Jadwal</h5>

            <form action="{{ route('jadwal.store') }}" method="POST">
                @csrf

                <select name="kode_matakuliah" class="form-control mb-2">
                    <option value="">-- Pilih Matakuliah --</option>
                    @foreach($matakuliah as $m)
                        <option value="{{ $m->kode_matakuliah }}">
                            {{ $m->nama_matakuliah }}
                        </option>
                    @endforeach
                </select>

                <select name="nidn" class="form-control mb-2">
                    <option value="">-- Pilih Dosen --</option>
                    @foreach($dosen as $d)
                        <option value="{{ $d->nidn }}">
                            {{ $d->nama }}
                        </option>
                    @endforeach
                </select>

                <input type="text" name="kelas" class="form-control mb-2" placeholder="Kelas (A/B)">

                <input type="text" name="hari" class="form-control mb-2" placeholder="Hari">

                <input type="time" name="jam" class="form-control mb-2">

                <button class="btn btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div>

    <!-- DATA -->
    <div class="col-md-8">
        <div class="card p-3">
            <h5>Data Jadwal</h5>

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <table class="table table-bordered text-center">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Matakuliah</th>
                        <th>Dosen</th>
                        <th>Kelas</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($jadwal as $key => $j)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $j->matakuliah->nama_matakuliah ?? '-' }}</td>
                        <td>{{ $j->dosen->nama ?? '-' }}</td>
                        <td>{{ $j->kelas }}</td>
                        <td>{{ $j->hari }}</td>
                        <td>{{ $j->jam }}</td>
                        <td>
                            <a href="{{ route('jadwal.edit', $j->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('jadwal.destroy', $j->id) }}" method="POST" style="display:inline;">
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