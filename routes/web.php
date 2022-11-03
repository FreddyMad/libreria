<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerViews;

Route::get('/', [controllerViews::class, 'showMain'])->name('main');

Route::get('registro', [controllerViews::class, 'showForm'])->name('form');

Route::post('agregarLibro', [controllerViews::class, 'addBook'])->name('saveBook');