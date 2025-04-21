<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard' ,[TaskController::class, 'dashboard'])->name('dashboard');
Route::get('/all-tasks' ,[TaskController::class, 'index'])->name('tasks.index');

Route::get('/all-tasks/create' ,[TaskController::class, 'create'])->name('task.create');
Route::post('/all-tasks' ,[TaskController::class, 'store'])->name('task.store');
Route::get('/all-tasks/{id}/edit' ,[TaskController::class, 'edit'])->name('task.edit');
Route::put('/all-tasks/{id}/edit' ,[TaskController::class, 'update'])->name('task.update');
Route::delete('/all-tasks/{id}/destroy' ,[TaskController::class, 'destroy'])->name('task.destroy');
Route::patch('/all-tasks/{id}/mark-as-done' ,[TaskController::class, 'markAsDone'])->name('task.markAsDone');
