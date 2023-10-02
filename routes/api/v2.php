<?php

use App\Http\Controllers\Api\V2\CompletedTaskController;
use App\Http\Controllers\Api\V2\TaskController;
use Illuminate\Support\Facades\Route;

//V2 Api Collection
Route::middleware('auth:sanctum')->prefix('v2')->group(function (){
    Route::apiResource('/tasks',TaskController::class);
    Route::patch('/tasks/{task}/complete',CompletedTaskController::class);
});