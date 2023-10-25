<?php

use App\Http\Controllers\Admin\AuthorController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/authors', [AuthorController::class, 'index'])->name('admin-authors');

Route::get('/admin/authors/create', [AuthorController::class, 'create'])->name('admin-author-create');

Route::post('/admin/authors', [AuthorController::class, 'store'])->name('admin-author-store');
