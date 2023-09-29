<?php

use App\Http\Controllers\Api\V1\CompletedTaskController;
use App\Http\Controllers\Api\V1\TaskController;
use Illuminate\Support\Facades\Route;

//V1 Api Collection
Route::prefix('v1')->group(function (){
    Route::apiResource('/tasks',TaskController::class);
    Route::patch('/tasks/{task}/complete',CompletedTaskController::class);
});