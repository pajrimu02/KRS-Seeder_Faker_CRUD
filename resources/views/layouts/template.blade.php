<!DOCTYPE html>
<html>
<head>
    <title>Sistem Akademik</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="d-flex flex-column min-vh-100">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">SIAKAD</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link fw-bold text-white" href="/">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-bold text-white" href="/tentang">Tentang</a>
                </li>

                <!-- DROPDOWN -->
                <li class="nav-item dropdown fw-bold">
                    <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">
                        Data Master
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dosen">Dosen</a></li>
                        <li><a class="dropdown-item" href="/mahasiswa">Mahasiswa</a></li>
                        <li><a class="dropdown-item" href="/matakuliah">Matakuliah</a></li>
                        <li><a class="dropdown-item" href="/jadwal">Jadwal</a></li>
                        <li><a class="dropdown-item" href="/krs">KRS</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container flex-grow-1">

    @yield('content')

</div>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-3 mt-5">
    <p>© 2026 Sistem Akademik</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>