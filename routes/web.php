<?php

use App\Http\Controllers\ApartamentosController;
use App\Http\Controllers\GastosController;
use App\Http\Controllers\IngresosController;
use App\Http\Controllers\IntermediariosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResumenController;
use App\Http\Controllers\TarifasController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::redirect('/', "dashboard");

//cambiamos la ruta para que pase por el ResumenControllador, si no no hará los calculos.
Route::get('/dashboard',[ResumenController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// aqui estan las rutas para el crud, podemos observarlo con php artisan route:list (lo apuntamos porque siempre se nos olvida)
Route::resource('/apartamentos', ApartamentosController::class);
Route::resource('/tarifas', TarifasController::class);
Route::resource('/intermediarios', IntermediariosController::class);
Route::resource('/gastos', GastosController::class);
Route::resource('/ingresos', IngresosController::class);
// Route::get();



require __DIR__.'/auth.php';
