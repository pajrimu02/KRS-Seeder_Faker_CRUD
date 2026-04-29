@extends('layouts.template')

@section('content')
</div>

<div class="container">
    <div class="row align-items-center about-section">

        <!-- FOTO KIRI -->
        <div class="col-md-5 text-center">
            <img src="https://i.pinimg.com/736x/c8/9c/89/c89c898f44aa5f7137901993c2afbd00.jpg" 
                 alt="About Me" 
                 class="img-fluid about-img">
        </div>

        <!-- TEXT KANAN -->
        <div class="col-md-7">
            <h2 class="fw-bold mb-3">Tentang Saya</h2>
            <p class="text-muted about-text" id="typing"></p>

            <div class="d-flex gap-4 mt-3">
                <div>
                    <h5 class="fw-bold text-primary">5+</h5>
                    <small>Project</small>
                </div>
                <div>
                    <h5 class="fw-bold text-success">100+</h5>
                    <small>Data</small>
                </div>
                <div>
                    <h5 class="fw-bold text-danger">1+</h5>
                    <small>Experience</small>
                </div>
            </div>

            <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-primary mt-3">Mahasiswa</a>
        </div>

    </div>
</div>
@endsection
<style>
    .about-section {
        margin-top: -40vh;
    }
    .about-img{
        width:500px;
    }
    .about-img:hover {
        transform: scale(1.05);
        transition: 0.3s;
    }
    .about-text {
    background: rgba(13, 110, 253, 0.1);  
    padding: 15px;
    border-radius: 10px;
    color: #333;
    border-radius: 10px;
    border-left: 5px solid #0d6efd;
    }
    .about-text:hover {
        background: rgba(13, 110, 253, 0.15);
        transition: 0.3s;
    }
    
    #typing::after {
    content: "|";
    animation: blink 1s infinite;
    }

    @keyframes blink {
        50% { opacity: 0; }
    }
    </style>

        <script>
        document.addEventListener("DOMContentLoaded", function () {
            const text = `Saya adalah seorang mahasiswa yang sedang mengembangkan sistem akademik (SIAKAD) berbasis web menggunakan Laravel.
            Sistem ini bertujuan untuk mempermudah pengelolaan data mahasiswa, KRS, jadwal, dan matakuliah.`;

            let i = 0;

            function ketik() {
                if (i < text.length) {
                    document.getElementById("typing").innerHTML += text.charAt(i);
                    i++;
                    setTimeout(ketik, 25);
                }
            }

            ketik();
        });
        </script>