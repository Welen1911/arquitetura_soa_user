<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/cliente', [ClienteController::class, 'store']);

Route::get('/cliente/{id}', [ClienteController::class, 'show']);
