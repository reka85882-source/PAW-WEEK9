<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #172b4d;
        }

        .dashboard-card {
            border: none;
            border-radius: 12px;
            transition: 0.2s;
        }

        .dashboard-card:hover {
            transform: translateY(-3px);
        }

        .welcome-section {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 25px;
        }

        .role-label {
            background-color: #e8eef8;
            color: #172b4d;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{route('dashboard')}}">
                Sistem Informasi
            </a>
            <div class="d-flex align-items-center gap-3">
                <span class="text-white">
                    {{Auth::user()->name}}
                </span>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="welcome-section shadow-sm mb-4">
            <h3 class="fw-bold mb-2">
                Selamat Datang, {{ Auth::user()->name }}!
            </h3>
            <p class="text-muted mb-3">
                Selamat datang di Sistem Informasi
                Silakan gunakan menu sesuai hak akses akun Anda
            </p>
            <span class="role-label">
                Role: {{ ucfirst(Auth::user()->role) }}
            </span>
        </div>
        <h5 class="fw-bold mb-3">Menu Utama</h5>
        <div class="row g-4">
            @if (Auth::user()->role == 'admin')
            <div class="col-md-4">
    <a href="{{ route('admin.pengguna') }}"
       class="text-decoration-none text-dark">

        <div class="card dashboard-card shadow-sm h-100">
            <div class="card-body p-4">
                <h5 class="fw-bold">Manajemen Pengguna</h5>
                <p class="text-muted">
                    Mengelola data pengguna dalam sistem akademik
                </p>

                <span class="text-primary fw-semibold">
                    Buka Halaman →
                </span>
            </div>
        </div>

    </a>
    </div>
            <div class="col-md-4">
    <a href="{{ route('materi.kelola') }}"
       class="text-decoration-none text-dark">

        <div class="card dashboard-card shadow-sm h-100">
            <div class="card-body p-4">
                <h5 class="fw-bold">Kelola Materi</h5>
                <p class="text-muted">
                    Mengelola materi pembelajaran
                </p>
                <span class="text-primary fw-semibold">
                    Buka Halaman →
                </span>
            </div>
        </div>

    </a>
</div>
             <div class="col-md-4">
                <div class="card dashboard-card shadow-sm h-100">
                    <div class="card-body p-4">
                        <h5 class="fw-bold">Kelola Nilai</h5>
                        <p class="text-muted">
                            Mengelola nilai akademik mahasiswa
                        </p>
                    </div>
                </div>
            </div>
        @elseif (Auth::user()->role == 'dosen')
        <div class="col-md-4">
    <a href="{{ route('materi.kelola') }}"
       class="text-decoration-none text-dark">

        <div class="card dashboard-card shadow-sm h-100">
            <div class="card-body p-4">
                <h5 class="fw-bold">Kelola Materi</h5>
                <p class="text-muted">
                    Mengelola materi pembelajaran
                </p>
                <span class="text-primary fw-semibold">
                    Buka Halaman →
                </span>
            </div>
        </div>

    </a>
</div>
        <div class="col-md-6">
            <div class="card dashboard-card shadow-sm h-100">
                <div class="card-body p-4">
                    <h5 class="fw-bold">Kelola Nilai</h5>
                    <p class="text-muted">
                        Mengelola nilai mahasiswa
                    </p>
                </div>
            </div>
        </div>
    @elseif (Auth::user()->role == 'mahasiswa')
    <div class="col-md-6">
        <div class="card dashboard-card shadow-sm h-100">
            <div class="card-body p-4">
                <h5 class="fw-bold">Lihat Materi</h5>
                <p class="text-muted">
                    Melihat materi pembelajaran yang tersedia
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
    <a href="{{ route('nilai.saya') }}"
       class="text-decoration-none text-dark">

        <div class="card dashboard-card shadow-sm h-100">
            <div class="card-body p-4">
                <h5 class="fw-bold">Nilai Saya</h5>
                <p class="text-muted">
                    Melihat hasil nilai akademik pribadi
                </p>
                <span class="text-primary fw-semibold">
                    Buka Halaman →
                </span>
            </div>
        </div>

    </a>
</div>
@endif
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>