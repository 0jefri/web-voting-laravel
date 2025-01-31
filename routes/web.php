<?php

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CandidateController;


use App\Http\Controllers\VotingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/add', [UserController::class, 'add'])->name('users.add');
    Route::get('/users/import', [UserController::class, 'import'])->name('users.import');

    Route::get('/candidate', [CandidateController::class, 'index'])->name('candidate.index');

    Route::get('/voting', [VotingController::class, 'index'])->name('voting.index');

    Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');

    Route::get('/penilaian', [PenilaianController::class, 'index'])->name('penilaian.index');


});

require __DIR__ . '/auth.php';
