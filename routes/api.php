<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes To Manage User Login,Register,Logout
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    //Register user
    Route::post("/register",[AuthController::class,'register']);
    //Login user
    Route::post('login', [AuthController::class,"login"]);
    //Logout user
    Route::post('logout', [AuthController::class,"logout"]);
    //Get a new token 
    Route::post('refresh', [AuthController::class,'refresh']);
    //Get user info based on Bearer Token (*************)
    Route::post('me', [AuthController::class,'me']);
});

