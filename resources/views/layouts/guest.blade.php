
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Sistem Informasi Akademik') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f1f5f9;
            font-family: Arial, sans-serif;
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
        }

        .login-card {
            width: 100%;
            max-width: 950px;
            background: white;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 35px rgba(0,0,0,0.08);
        }

        .login-info {
            background: #172b4d;
            color: white;
            padding: 55px 40px;
            min-height: 520px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-form {
            padding: 50px 45px;
        }

        .brand-icon {
            width: 55px;
            height: 55px;
            background: #294b7a;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            margin-bottom: 25px;
        }

        .form-control {
            padding: 12px 14px;
            border-radius: 9px;
        }

        .btn-login {
            background: #172b4d;
            color: white;
            padding: 12px;
            border-radius: 9px;
            font-weight: 600;
        }

        .btn-login:hover {
            background: #294b7a;
            color: white;
        }

        @media (max-width: 767px) {
            .login-info {
                min-height: auto;
                padding: 35px 25px;
            }

            .login-form {
                padding: 35px 25px;
            }
        }
    </style>
</head>

<body>
    <div class="login-wrapper">
        <div class="login-card">
            <div class="row g-0">

                <div class="col-md-5">
                    <div class="login-info">
                        <div class="brand-icon">🎓</div>
                        <h2 class="fw-bold mb-3">Sistem Informasi Akademik</h2>
                        <p class="text-white-50">
                            Platform akademik untuk membantu pengelolaan
                            materi, nilai, dan informasi pengguna dalam satu sistem.
                        </p>
                        <hr class="border-light opacity-25">
                        <small class="text-white-50">
                            Kelola aktivitas akademik dengan lebih mudah dan terstruktur.
                        </small>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="login-form">
                        {{ $slot }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
