<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AccomplishmentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/work', [WorkController::class,'index']);
Route::post('/work', [WorkController::class,'create']);
Route::post('/work/update', [WorkController::class,'update']);
Route::delete('/work/destroy', [WorkController::class,'destroy']);

Route::get('/contact-us', [ContactUsController::class,'index']);
Route::post('/contact-us', [ContactUsController::class,'create']);
Route::post('/contact-us/update', [ContactUsController::class,'update']);
Route::delete('/contact-us/destroy', [ContactUsController::class,'destroy']);


Route::get('/accomplisment', [AccomplishmentController::class,'index']);
Route::post('/accomplisment', [AccomplishmentController::class,'create']);
Route::post('/accomplisment/update', [AccomplishmentController::class,'update']);
Route::delete('/accomplisment/destroy', [AccomplishmentController::class,'destroy']);