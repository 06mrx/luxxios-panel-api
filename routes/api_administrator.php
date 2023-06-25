<?php

use App\Http\Controllers\API\Administrator\PersonalDataController;
use App\Http\Controllers\API\Administrator\UserController;
use App\Http\Controllers\API\Administrator\RoleController;
use App\Http\Controllers\API\Administrator\DashboardController;

Route::group(['namespace' => 'administrator', 'prefix' => 'administrator', 'as' => 'administrator.'], function () {
    Route::group(['namespace' => 'personal-data', 'prefix' => 'personal-data', 'as' => 'personal-data.'], function () {
        Route::middleware('auth:sanctum')->post('store', [PersonalDataController::class, 'store'])->name('store');
    });

    
    Route::group(['namespace' => 'role', 'prefix' => 'role', 'as' => 'role.'], function () {
        Route::middleware('auth:sanctum')->get('index', [RoleController::class, 'index'])->name('index');
    });
    Route::group(['namespace' => 'user', 'prefix' => 'user', 'as' => 'user.'], function () {
        Route::middleware('auth:sanctum')->get('index', [UserController::class, 'index'])->name('index');
        Route::middleware('auth:sanctum')->delete('destroy/{id}', [UserController::class, 'destroy'])->name('destroy');
        Route::middleware('auth:sanctum')->post('update/{id}', [UserController::class, 'update'])->name('update');
        Route::middleware('auth:sanctum')->get('teacher', [UserController::class, 'indexTeacher'])->name('teacher');
        Route::middleware('auth:sanctum')->get('teacher-and-principal', [UserController::class, 'indexTeacherAndPrincipal'])->name('teacher');
        
    });

    Route::group(['namespace' => 'dashboard', 'prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::middleware('auth:sanctum')->get('index', [DashboardController::class, 'index'])->name('index');
    });


 
});

