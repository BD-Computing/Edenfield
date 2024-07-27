<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\payments\mpesa\MPESAResponsesController;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('validation', [MPESAResponsesController::class,'validation']);
Route::post('confirmation', [MPESAResponsesController::class,'confirmation']);
Route::post('stkpush', [MPESAResponsesController::class,'stkpush']);
Route::post('b2ccallback', [MPESAResponsesController::class,'b2cCallback']);
Route::post('b2ctimeout', [MPESAResponsesController::class,'b2cTimeout']);
