<?php

use App\Http\Controllers\ApiDataKirimDataController;
use App\Http\Controllers\ApiDataSendorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/v1/monitoring/fetch-data', [ApiDataSendorController::class, 'fetchDataLogam'])->name('api.monitoring.fetchData');
Route::get('/v1/monitoring/fetch-data', [ApiDataSendorController::class, 'fetchDataAll'])->name('api.monitoring.fetchDataAll');

Route::apiResource('kirimdata', ApiDataKirimDataController::class);
