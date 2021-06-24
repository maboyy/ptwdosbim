<?php

use App\Http\Controllers\JadwalUjianController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route("login");
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

Route::get('/ujian', [JadwalUjianController::class, "index"])->middleware(['auth'])->name('ujian');

require __DIR__.'/auth.php';
