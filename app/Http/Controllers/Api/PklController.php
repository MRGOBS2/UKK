<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/pkl', function () {
    return "Halaman PKL";
})->middleware(['auth', 'verified'])->name('pkl');


// Halaman siswa bisa diakses oleh siapa pun yang login & terverifikasi
Route::get('/siswa', function () {
    return "Siswa";
})->middleware(['auth', 'verified'])
 ->name('siswa');

// Rute untuk pengaturan (settings), hanya untuk user yang login
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

// Route tambahan dari Laravel Breeze/Fortify/etc
require __DIR__.'/auth.php';
