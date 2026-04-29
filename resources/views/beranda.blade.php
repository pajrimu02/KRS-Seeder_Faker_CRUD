@extends('layouts.template')

@section('content')
</div>
<!-- HERO -->
<div class="hero-section text-white d-flex align-items-center">
    <div class="container">
        <h1 class="fw-bold display-5">Selamat Datang di Sistem KRS</h1>
        <p class="lead">Kelola KRS Mahasiswa, Jadwal, dan Matakuliah dengan mudah dan cepat.</p>
        <a href="{{ route('krs.index') }}" class="btn btn-primary">Mulai KRS</a>
    </div>
</div>

<!-- FITUR -->
<div class="container fitur-section ">
    <div class="row text-center ">

        <div class="col-md-4">
            <div class="card p-4 shadow-sm">
                <i class="fa-solid fa-user-graduate fa-2x text-primary mb-3"></i>
                <h5>Mahasiswa</h5>
                <p>Kelola data mahasiswa dengan mudah.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 shadow-sm">
                <i class="fa-solid fa-book fa-2x text-success mb-3"></i>
                <h5>Matakuliah</h5>
                <p>Manajemen data matakuliah dan SKS.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 shadow-sm">
                <i class="fa-solid fa-calendar-days fa-2x text-danger mb-3"></i>
                <h5>Jadwal</h5>
                <p>Atur jadwal perkuliahan dengan rapi.</p>
            </div>
        </div>

    </div>
</div>

@endsection

<style>
    .body {
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }
    .hero-section {
        height: 100vh;
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
        url('https://i.pinimg.com/736x/cf/fe/1f/cffe1fe8cc6044afb78bf8280589855c.jpg') no-repeat;
        background-size: cover;
        background-position: center;
    }

    .fitur-section {
    margin-top: -90px;
    position: relative;
    z-index: 10;
    }

    .hero-section {
        position: relative;
        z-index: 1;
    }

    .card {
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
</style>