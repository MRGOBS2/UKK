<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Models\guru;
use App\Models\siswa;
use App\Models\pkl;
use App\Models\industri;




Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('/guru',  'guru', ['guru' => guru::all()])->name('guru');
Route::view('/siswa',  'siswa', ['siswa' => siswa::all()])->name('siswa');
Route::view('/pkl',  'pkl', ['pkl' => pkl::all()])->name('pkl');
Route::view('/industri',  'industri', ['industri' => industri::all()])->name('industri');




Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
