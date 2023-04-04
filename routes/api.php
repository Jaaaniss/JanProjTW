<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VansController;
use App\Http\Controllers\NikeController;
use App\Http\Controllers\AdidasController;
use App\Http\Controllers\NBController;
use App\Http\Controllers\SizeController;






Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


