<?php

namespace App\Http\Controlers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComprovanteController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DeclaracaoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\TurmaController;

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('dashboard');
})->name('home');

Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos.index');
Route::get('/alunos/create', [AlunoController::class, 'create'])->name('alunos.create');
Route::get('/alunos/show/{id}', [AlunoController::class, 'show'])->name('alunos.show');
Route::get('/alunos/edit/{id}', [AlunoController::class, 'edit'])->name('alunos.edit');
Route::post('/alunos/store', [AlunoController::class, 'store'])->name('alunos.store');
Route::post('/alunos/update', [AlunoController::class, 'update'])->name('alunos.update');
Route::post('/alunos/destroy/{id}', [AlunoController::class, 'destroy'])->name('alunos.destroy');

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::get('/categorias/show/{id}', [CategoriaController::class, 'show'])->name('categorias.show');
Route::get('/categorias/edit/{id}', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::post('/categorias/store', [CategoriaController::class, 'store'])->name('categorias.store');
Route::post('/categorias/update', [CategoriaController::class, 'update'])->name('categorias.update');
Route::post('/categorias/destroy/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');

Route::get('/comprovantes', [ComprovanteController::class, 'index'])->name('comprovantes.index');
Route::get('/comprovantes/create', [ComprovanteController::class, 'create'])->name('comprovantes.create');
Route::get('/comprovantes/show/{id}', [ComprovanteController::class, 'show'])->name('comprovantes.show');
Route::get('/comprovantes/edit/{id}', [ComprovanteController::class, 'edit'])->name('comprovantes.edit');
Route::post('/comprovantes/store', [ComprovanteController::class, 'store'])->name('comprovantes.store');
Route::post('/comprovantes/update', [ComprovanteController::class, 'update'])->name('comprovantes.update');
Route::post('/comprovantes/destroy/{id}', [ComprovanteController::class, 'destroy'])->name('comprovantes.destroy');

Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::get('/cursos/show/{id}', [CursoController::class, 'show'])->name('cursos.show');
Route::get('/cursos/edit/{id}', [CursoController::class, 'edit'])->name('cursos.edit');
Route::post('/cursos/store', [CursoController::class, 'store'])->name('cursos.store');
Route::post('/cursos/update', [CursoController::class, 'update'])->name('cursos.update');
Route::post('/cursos/destroy/{id}', [CursoController::class, 'destroy'])->name('cursos.destroy');

Route::get('/declaracoes', [DeclaracaoController::class, 'index'])->name('declaracoes.index');
Route::get('/declaracoes/create', [DeclaracaoController::class, 'create'])->name('declaracoes.create');
Route::get('/declaracoes/show/{id}', [DeclaracaoController::class, 'show'])->name('declaracoes.show');
Route::get('/declaracoes/edit/{id}', [DeclaracaoController::class, 'edit'])->name('declaracoes.edit');
Route::post('/declaracoes/store', [DeclaracaoController::class, 'store'])->name('declaracoes.store');
Route::post('/declaracoes/update', [DeclaracaoController::class, 'update'])->name('declaracoes.update');
Route::post('/declaracoes/destroy/{id}', [DeclaracaoController::class, 'destroy'])->name('declaracoes.destroy');

Route::get('/documentos', [DocumentoController::class, 'index'])->name('documentos.index');
Route::get('/documentos/create', [DocumentoController::class, 'create'])->name('documentos.create');
Route::get('/documentos/show/{id}', [DocumentoController::class, 'show'])->name('documentos.show');
Route::get('/documentos/edit/{id}', [DocumentoController::class, 'edit'])->name('documentos.edit');
Route::post('/documentos/store', [DocumentoController::class, 'store'])->name('documentos.store');
Route::post('/documentos/update', [DocumentoController::class, 'update'])->name('documentos.update');
Route::post('/documentos/destroy/{id}', [DocumentoController::class, 'destroy'])->name('documentos.destroy');

Route::get('/niveis', [NivelController::class, 'index'])->name('niveis.index');
Route::get('/niveis/create', [NivelController::class, 'create'])->name('niveis.create');
Route::get('/niveis/show/{id}', [NivelController::class, 'show'])->name('niveis.show');
Route::get('/niveis/edit/{id}', [NivelController::class, 'edit'])->name('niveis.edit');
Route::post('/niveis/store', [NivelController::class, 'store'])->name('niveis.store');
Route::post('/niveis/update', [NivelController::class, 'update'])->name('niveis.update');
Route::post('/niveis/destroy/{id}', [NivelController::class, 'destroy'])->name('niveis.destroy');

Route::get('/turmas', [TurmaController::class, 'index'])->name('turmas.index');
Route::get('/turmas/create', [TurmaController::class, 'create'])->name('turmas.create');
Route::get('/turmas/show/{id}', [TurmaController::class, 'show'])->name('turmas.show');
Route::get('/turmas/edit/{id}', [TurmaController::class, 'edit'])->name('turmas.edit');
Route::post('/turmas/store', [TurmaController::class, 'store'])->name('turmas.store');
Route::post('/turmas/update', [TurmaController::class, 'update'])->name('turmas.update');
Route::post('/turmas/destroy/{id}', [TurmaController::class, 'destroy'])->name('turmas.destroy');
