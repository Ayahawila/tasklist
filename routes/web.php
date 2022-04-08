<?php

use Illuminate\Support\Facades\Route;
Route::post('/task/store', [taskcontroller::class, 'store'])->name('task.store');
Route::get('/', [taskcontroller::class, 'index'])->name('tasks.index');




