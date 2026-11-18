<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin/pengguna', function () {
    $pengguna = User::all();

    return view('admin.pengguna', compact('pengguna'));
})->middleware(['auth', 'role:admin'])->name('admin.pengguna');

Route::get('/materi/kelola', function () {
    return view('materi.kelola');
})->middleware(['auth', 'role:admin,dosen'])->name('materi.kelola');

Route::get('/nilai-saya', function () {
    return view('nilai.saya');
})->middleware(['auth', 'role:admin,mahasiswa'])->name('nilai.saya');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
