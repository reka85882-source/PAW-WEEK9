
<x-guest-layout>

    <div class="mb-4">
        <h3 class="fw-bold" style="color:#172b4d;">Selamat Datang!</h3>
        <p class="text-muted">Silakan login menggunakan akun akademik Anda.</p>
    </div>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <x-auth-session-status class="mb-3" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label fw-semibold">Email</label>
            <input
                type="email"
                name="email"
                class="form-control"
                value="{{ old('email') }}"
                placeholder="Masukkan email Anda"
                required autofocus autocomplete="username">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Password</label>
            <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Masukkan password"
                required autocomplete="current-password">
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label text-muted" for="remember">
                    Ingat saya
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-login w-100">
            Login Sekarang
        </button>
    </form>

    <div class="text-center mt-4">
        <span class="text-muted">Belum memiliki akun?</span>
        <a href="{{ route('register') }}" class="text-decoration-none fw-semibold">
            Daftar di sini
        </a>
    </div>

</x-guest-layout>
