<?php

use App\Http\Controllers\controladorAutores;
use App\Http\Controllers\controladorLibros;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerViews;

Route::get('/', [controllerViews::class, 'showMain'])->name('main');

Route::get('registro', [controllerViews::class, 'showForm'])->name('form');

//Route::get('registroAutor', [controllerViews::class, 'showFormAutor'])->name('formAutor');

Route::post('agregarLibro', [controllerViews::class, 'addBook'])->name('saveBook');

//Route::post('agregarAutor', [controllerViews::class, 'addAutor'])->name('saveAutor');

//Route::get('consultarAutor', [controllerViews::class, 'consultAutor'])->name('consulAutor');

Route::get('consultarLibro', [controllerViews::class, 'consultLibro'])->name('consulLibro');


Route::get('autor/create', [controladorAutores::class, 'create'])->name('autor.create');

Route::post('autor/store', [controladorAutores::class, 'store'])->name('autor.store');

Route::get('autor/index', [controladorAutores::class, 'index'])->name('autor.index');

Route::get('autor/{id}/edit', [controladorAutores::class, 'edit'])->name('autor.edit');

Route::put('autor/{id}', [controladorAutores::class, 'update'])->name('autor.update');

Route::delete('autor/{id}', [controladorAutores::class, 'destroy'])->name('autor.destroy');


Route::get('libro/create', [controladorLibros::class, 'create'])->name('libro.create');

Route::post('libro/store', [controladorLibros::class, 'store'])->name('libro.store');

Route::get('libro/index', [controladorLibros::class, 'index'])->name('libro.index');

Route::get('libro/{id}/edit', [controladorLibros::class, 'edit'])->name('libro.edit');

Route::put('libro/{id}', [controladorLibros::class, 'update'])->name('libro.update');

Route::delete('libro/{id}', [controladorLibros::class, 'destroy'])->name('libro.destroy');

