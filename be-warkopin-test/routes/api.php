<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserDummyController;

Route::prefix('/user-dummy')->group(function () {
    Route::get('/', [UserDummyController::class, 'index']);
    Route::post('/store', [UserDummyController::class, 'store']);
    Route::get('/{id}', [UserDummyController::class, 'show']);
    Route::post('/{id}/update', [UserDummyController::class, 'update']);
    Route::delete('/{id}/destroy', [UserDummyController::class, 'destroy']);
});
