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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::user()->name === 'Admin') {
            $materials = App\Models\Material::paginate(10); 
            return view('admin.materials.index', compact('materials'));
        } else {
            return view('dashboard');
        }
    })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::get('/detail', [MaterialController::class, 'showuser'])->name('detail.show');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('materials', MaterialController::class);
    Route::get('/materials/showuser/{material}', [MaterialController::class, 'showuser'])->name('materials.showuser');

});

require __DIR__.'/auth.php';
