<?php

use App\Http\Controllers\ApartamentosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', "dashboard");

// Route::get('/apartamentos', function (){
//     return view('apartamentos');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// aqui estan las rutas para el crud, podemos observarlo con php artisan route:list (lo apuntamos porque siempre se nos olvida)
Route::resource('/apartamentos', ApartamentosController::class);

require __DIR__.'/auth.php';
