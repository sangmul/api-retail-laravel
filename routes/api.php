<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonDataController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    // Read (GET)   
    Route::get('persondata', [PersonDataController::class,'index']);

    // Create (POST)
    Route::post('persondata', [PersonDataController::class,'create']);
    
    // Update (PUT)
    Route::put('/persondata/{id}', [PersonDataController::class,'update']);
    
    // Delete (DELETE)
    Route::delete('/persondata/{id}', [PersonDataController::class,'delete']);    