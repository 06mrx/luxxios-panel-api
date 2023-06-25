<?php

use App\Http\Controllers\API\Reference\WorkUnitController;
use App\Http\Controllers\API\Reference\EducationController;
use App\Http\Controllers\API\Reference\MaritalStatusController;
use App\Http\Controllers\API\Reference\PositionController;
use App\Http\Controllers\API\Reference\RankController;
use App\Http\Controllers\API\Reference\ReligionController;
use App\Http\Controllers\API\Reference\VillageController;
use App\Http\Controllers\API\Reference\DistrictController;
use App\Http\Controllers\API\Reference\StatusController;
use App\Http\Controllers\API\Reference\OutputUnitController;
use App\Http\Controllers\API\Reference\IncomeController;
use App\Http\Controllers\API\Reference\JobController;

Route::group(['namespace' => 'reference', 'prefix' => 'reference', 'as' => 'reference.'], function () {
    Route::group(['namespace' => 'education', 'prefix' => 'education', 'as' => 'education.'], function () {
        Route::middleware('auth:sanctum')->get('index', [EducationController::class, 'index'])->name('index');
    });

    Route::group(['namespace' => 'marital-status', 'prefix' => 'marital-status', 'as' => 'marital-status.'], function () {
        Route::middleware('auth:sanctum')->get('index', [MaritalStatusController::class, 'index'])->name('index');
    });

    Route::group(['namespace' => 'position', 'prefix' => 'position', 'as' => 'position.'], function () {
        Route::middleware('auth:sanctum')->get('index', [PositionController::class, 'index'])->name('index');
    });

    Route::group(['namespace' => 'rank', 'prefix' => 'rank', 'as' => 'rank.'], function () {
        Route::middleware('auth:sanctum')->get('index', [RankController::class, 'index'])->name('index');
    });

    Route::group(['namespace' => 'religion', 'prefix' => 'religion', 'as' => 'religion.'], function () {
        Route::middleware('auth:sanctum')->get('index', [ReligionController::class, 'index'])->name('index');
    });

    Route::group(['namespace' => 'village', 'prefix' => 'village', 'as' => 'village.'], function () {
        Route::middleware('auth:sanctum')->get('index', [VillageController::class, 'index'])->name('index');
    });

    Route::group(['namespace' => 'district', 'prefix' => 'district', 'as' => 'district.'], function () {
        Route::middleware('auth:sanctum')->get('list', [DistrictController::class, 'list'])->name('list');
    });

    Route::group(['namespace' => 'village', 'prefix' => 'village', 'as' => 'village.'], function () {
        Route::middleware('auth:sanctum')->get('search', [VillageController::class, 'search'])->name('search');
    });

    Route::group(['namespace' => 'work_unit', 'prefix' => 'work_unit', 'as' => 'work_unit.'], function () {
        Route::middleware('auth:sanctum')->get('list', [WorkUnitController::class, 'list'])->name('list');
        Route::middleware('auth:sanctum')->get('index', [WorkUnitController::class, 'index'])->name('index');
        Route::middleware('auth:sanctum')->post('store', [WorkUnitController::class, 'store'])->name('store');
        Route::middleware('auth:sanctum')->get('show/{id}', [WorkUnitController::class, 'show'])->name('show');
        Route::middleware('auth:sanctum')->post('update/{id}', [WorkUnitController::class, 'update'])->name('update');
        Route::middleware('auth:sanctum')->delete('delete/{id}', [WorkUnitController::class, 'destroy'])->name('delete');
    });

    Route::group(['namespace' => 'status', 'prefix' => 'status', 'as' => 'status.'], function () {
        Route::middleware('auth:sanctum')->get('index', [StatusController::class, 'index'])->name('index');
    });

    Route::group(['namespace' => 'output-unit', 'prefix' => 'output-unit', 'as' => 'output-unit.'], function () {
        Route::middleware('auth:sanctum')->get('index', [OutputUnitController::class, 'index'])->name('index');
    });

    Route::group(['namespace' => 'income', 'prefix' => 'income', 'as' => 'income.'], function () {
        Route::middleware('auth:sanctum')->get('index', [IncomeController::class, 'index'])->name('index');
    });

    Route::group(['namespace' => 'job', 'prefix' => 'job', 'as' => 'job.'], function () {
        Route::middleware('auth:sanctum')->get('index', [JobController::class, 'index'])->name('index');
    });

});
