<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('index');
});

Route::get('/all-tasks', function () {
    return view('tasks.index');
});
Route::get('/all-tasks/create', function () {
    return view('tasks.create');
});
Route::get('/all-tasks/edit', function () {
    return view('tasks.edit');
});
