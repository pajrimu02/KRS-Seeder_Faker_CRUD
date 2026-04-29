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
                    <a class="nav-link fw-bold text-white {{ request()->is('/') ? 'active-link' : '' }}" href="/">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-bold text-white {{ request()->is('tentang') ? 'active-link' : '' }}" href="/tentang">
                        Tentang
                    </a>
                </li>

                <!-- DROPDOWN -->
                <li class="nav-item dropdown fw-bold">
                    <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">
                        Data Master
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                        <a class="dropdown-item {{ request()->is('dosen*') ? 'active-dropdown' : '' }}" href="/dosen">
                            Dosen
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item {{ request()->is('mahasiswa*') ? 'active-dropdown' : '' }}" href="/mahasiswa">
                            Mahasiswa
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item {{ request()->is('matakuliah*') ? 'active-dropdown' : '' }}" href="/matakuliah">
                            Matakuliah
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item {{ request()->is('jadwal*') ? 'active-dropdown' : '' }}" href="/jadwal">
                            Jadwal
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item {{ request()->is('krs*') ? 'active-dropdown' : '' }}" href="/krs">
                            KRS
                        </a>
                    </li>
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
    <style>
        .nav-link {
    position: relative;
    display: inline-block;
}

/* hanya untuk link biasa, bukan dropdown */
.navbar .nav-link:not(.dropdown-toggle)::after {
    content: "";
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 0;
    width: 0;
    height: 2px;
    background: white;
    transition: 0.3s ease;
}

.navbar .nav-link:not(.dropdown-toggle):hover::after {
    width: 50%;
}

.active-link::after {
    width: 50%;
}

.active-dropdown {
    background-color: #0d6efd;
    color: white !important;
}
    </style>
</html>