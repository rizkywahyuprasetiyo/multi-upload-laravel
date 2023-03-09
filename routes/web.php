<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ProjectController::class)->name('project.')->group(function () {
    Route::get('project', 'index')->name('index');
    Route::get('project/tambah', 'tambah')->name('tambah');
    Route::post('project/simpan', 'simpan')->name('simpan');
    Route::get('project/{project}/edit', 'edit')->name('edit');
    Route::patch('project/{project}/update', 'update')->name('update');
    Route::delete('project/{project}/hapus', 'hapus')->name('hapus');
});
