<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FilmesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [FilmesController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/**Redirecionamento */
Route::get("/cadastrar", [FilmesController::class, "cadastrar"]);
Route::get("/editar/{id}", [FilmesController::class, "editar"]);
Route::get("/listartabela", [FilmesController::class, "listartabela"]);


/*Funções */
Route::post("/adicionar", [FilmesController::class, "adicionar"]);
Route::post("/atualizar/{id}", [FilmesController::class, "atualizar"]);
Route::get("/excluir/{id}", [FilmesController::class, "excluir"]);


Route::post("/favoritar/{id}", [FilmesController::class, "favoritar"]);
Route::post("/desfavoritar/{id}", [FilmesController::class, "desfavoritar"]);

require __DIR__ . '/auth.php';
