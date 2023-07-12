<?php
use App\Http\Controllers\API\Public\PublicController;

Route::group(['namespace' => 'public', 'prefix' => 'public', 'as' => 'public.'], function () {
    // Route::middleware('auth:sanctum')->get('index', [EducationController::class, 'index'])->name('index');
    Route::middleware('auth:sanctum')->get('/dashboard', [PublicController::class, 'dashboard']);
    Route::middleware('auth:sanctum')->get('/index', [PublicController::class, 'index']);
    Route::middleware('auth:sanctum')->post('/store', [PublicController::class, 'store']);
    Route::middleware('auth:sanctum')->post('/update/{id}', [PublicController::class, 'update']);
    Route::middleware('auth:sanctum')->delete('/delete/{id}', [PublicController::class, 'destroy']);
    Route::post('/check', [PublicController::class, 'isExpire']);
    Route::middleware('auth:sanctum')->get('/reset/{id}', [PublicController::class, 'reset']);
    Route::middleware('auth:sanctum')->get('/reset-all', [PublicController::class, 'resetAllDevice']);
    Route::middleware('auth:sanctum')->post('/upload-sock', [PublicController::class, 'uploadSock']);
});
