<?php

use Task\Controllers\TaskController;

Route::view('/tasks'           , 'Task::tasks.index') ->name('tasks.index');

Route::view('/tasks/create'    , 'Task::tasks.create')->name('tasks.create');
Route::post('tasks'            ,  [ TaskController::class , 'store'] )->name('tasks.store');

Route::get('tasks/{task}/edit' ,  [ TaskController::class , 'edit'] )->name('tasks.edit');
Route::put('tasks'             ,  [ TaskController::class , 'update'] )->name('tasks.update');

Route::delete('tasks/{task}'   ,  [ TaskController::class , 'destroy'] )->name('tasks.destroy');
