<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('support.destroy');
Route::put('/supports/{id}', [SupportController::class, 'update'])->name('support.update');
Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('support.edit');
Route::get('/supports/create', [SupportController::class, 'create'])->name('support.create');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('support.show');
Route::get('/supports', [SupportController::class, 'index'])->name('support.index');
Route::post('/supports', [SupportController::class, 'store'])->name('support.store');

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
