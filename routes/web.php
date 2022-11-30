<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerViews;

Route::get('/', [controllerViews::class, 'showMain'])->name('main');

Route::get('registro', [controllerViews::class, 'showForm'])->name('form');

Route::get('registroAutor', [controllerViews::class, 'showFormAutor'])->name('formAutor');

Route::post('agregarLibro', [controllerViews::class, 'addBook'])->name('saveBook');

Route::post('agregarAutor', [controllerViews::class, 'addAutor'])->name('saveAutor');

Route::get('consultarAutor', [controllerViews::class, 'consultAutor'])->name('consulAutor');

Route::get('consultarLibro', [controllerViews::class, 'consultLibro'])->name('consulLibro');