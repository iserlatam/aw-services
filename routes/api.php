<?php

use App\Http\Controllers\Api\V1\SiteFormController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware('api')->prefix("v2/services")->group(function () {
    Route::prefix("aw-ds/mail")->group(function () {
        Route::get("all", [SiteFormController::class, "index"])->name("messages");
        Route::post("new", [SiteFormController::class, "store"]);
    });
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
