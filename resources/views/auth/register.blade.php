
<x-guest-layout>

    <div class="mb-4">
        <h3 class="fw-bold" style="color:#172b4d;">Buat Akun Baru</h3>
        <p class="text-muted">Daftarkan diri untuk menggunakan sistem akademik.</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Lengkap</label>
            <input type="text" name="name" class="form-control"
                value="{{ old('name') }}" placeholder="Masukkan nama lengkap"
                required autofocus autocomplete="name">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Email</label>
            <input type="email" name="email" class="form-control"
                value="{{ old('email') }}" placeholder="Masukkan email"
                required autocomplete="username">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Password</label>
            <input type="password" name="password" class="form-control"
                placeholder="Minimal 8 karakter" required autocomplete="new-password">
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control"
                placeholder="Ulangi password" required autocomplete="new-password">
        </div>

        <button type="submit" class="btn btn-login w-100">
            Daftar Sekarang
        </button>
    </form>

    <div class="text-center mt-4">
        <span class="text-muted">Sudah memiliki akun?</span>
        <a href="{{ route('login') }}" class="text-decoration-none fw-semibold">
            Login
        </a>
    </div>

</x-guest-layout>
