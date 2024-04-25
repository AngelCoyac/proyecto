<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DocumentoController;

Route::get('/', function () {
    return view('Auth/login');
});

//Rutas para los departamentos
Route::get('/finanzas', [DocumentoController::class, 'mostrarTodas'])->name('finanzas')->defaults('departamentoId', 1);
Route::get('/RecursosHumanos', [DocumentoController::class, 'mostrarTodas'])->name('RecursosHumanos')->defaults('departamentoId', 2);
Route::get('/tecnologias', [DocumentoController::class, 'mostrarTodas'])->name('tecnologias')->defaults('departamentoId', 3);
Route::get('/administracion', [DocumentoController::class, 'mostrarTodas'])->name('administracion')->defaults('departamentoId', 4);
Route::get('/legal', [DocumentoController::class, 'mostrarTodas'])->name('legal')->defaults('departamentoId', 5);
Route::get('/ventas', [DocumentoController::class, 'mostrarTodas'])->name('ventas')->defaults('departamentoId', 6);


// Rutas autenticadas
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});

// Rutas para el manejo de departamentos
Route::get('/departamentos', [DepartamentoController::class, 'mostrarDepartamentos'])->name('departamentos');
Route::get('/departamentos/crear', [DepartamentoController::class, 'crear'])->name('departamentos.crear');
Route::post('/departamentos', [DepartamentoController::class, 'guardar'])->name('departamentos.guardar');

// Rutas para los documentos
Route::get('/documents/create', [DocumentoController::class, 'create'])->name('documents.create');
Route::post('/documentos', [DocumentoController::class, 'store'])->name('documentos.store');
Route::get('/departamento/{departamentoId}/documentos', [DocumentoController::class, 'mostrarTodas'])->name('departamento.documentos');

// Descargar y ver documentos
Route::get('/documentos/{id}/descargar', 'DocumentoController@descargarDocumento')->name('documentos.descargar');
Route::get('/documentos/ver/{id}', 'DocumentoController@ver')->name('documentos.ver');
