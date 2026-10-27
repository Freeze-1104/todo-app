<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::resource('tasks', TaskController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

    Route::patch('/tasks/{id}/complete', [TaskController::class, 'complete'])
    ->name('tasks.complete');

    Route::patch('/tasks/{id}/undo', [TaskController::class, 'undo'])
    ->name('tasks.undo');

    Route::delete('/tasks/completed/all', [TaskController::class, 'destroyCompleted'])
    ->name('tasks.destroyCompleted');