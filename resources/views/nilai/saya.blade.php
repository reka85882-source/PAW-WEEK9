
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark shadow-sm" style="background-color: #172b4d;">
    <div class="container">
        <a href="{{ route('dashboard') }}" class="navbar-brand fw-bold">
            Sistem Informasi Akademik
        </a>
    </div>
</nav>

<div class="container py-5">
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <h3 class="fw-bold">Nilai Saya</h3>
            <p class="text-muted">
                Halaman untuk melihat hasil nilai akademik.
            </p>

            <div class="alert alert-info">
                Selamat datang di halaman Nilai Saya.
                Data nilai akademik akan ditampilkan di sini.
            </div>

            <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                Kembali ke Dashboard
            </a>
        </div>
    </div>
</div>

</body>
</html>
