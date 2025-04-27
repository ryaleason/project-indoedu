<?php

use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Rute publik
Route::get('/', function () {
    return redirect()->route('login');
});

// Rute yang memerlukan autentikasi
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard dengan validasi role
    Route::get('/dashboard', function () {
        // Cek role user yang sedang login
        if (Auth::user()->name === 'Admin') {
            return view('admin.materials.index');
        } else {
            return view('dashboard');
        }
    })->name('dashboard');

    // Routes untuk manajemen profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::get('/detail', [MaterialController::class, 'showuser'])->name('detail.show');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes untuk manajemen materi
    Route::resource('materials', MaterialController::class);
    Route::get('/materials/showuser/{material}', [MaterialController::class, 'showuser'])->name('materials.showuser');

});

require __DIR__.'/auth.php';
