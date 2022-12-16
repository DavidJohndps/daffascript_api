<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AccomplishmentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TechnologieController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\AuthController;

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


Route::get('/cms', [AuthController::class, 'dashboard'])->middleware('auth:sanctum');

Route::get('/work', [WorkController::class,'index']);
Route::post('/work', [WorkController::class,'create']);
Route::post('/work/update/{id}', [WorkController::class,'update']);
Route::get('/work/get/{id}', [WorkController::class,'getById']);
Route::delete('/work/destroy/{id}', [WorkController::class,'destroy']);

Route::get('/contact-us', [ContactUsController::class,'index']);
Route::post('/contact-us', [ContactUsController::class,'create']);
Route::post('/contact-us/update', [ContactUsController::class,'update']);
Route::get('/contact-us/get/{id}', [ContactUsController::class,'getById']);
Route::delete('/contact-us/destroy/{id}', [ContactUsController::class,'destroy']);


Route::get('/accomplisment', [AccomplishmentController::class,'index']);
Route::post('/accomplisment', [AccomplishmentController::class,'create']);
Route::post('/accomplisment/update', [AccomplishmentController::class,'update']);
Route::get('/accomplisment/get/{id}', [AccomplishmentController::class,'getById']);
Route::delete('/accomplisment/destroy', [AccomplishmentController::class,'destroy']);

Route::get('/review', [ReviewController::class,'index']);
Route::post('/review', [ReviewController::class,'create']);
Route::post('/review/update/{id}', [ReviewController::class,'update']);
Route::get('/review/get/{id}', [ReviewController::class,'getById']);
Route::delete('/review/destroy/{id}', [ReviewController::class,'destroy']);

Route::get('/service', [ServiceController::class,'index']);
Route::post('/service', [ServiceController::class,'create']);
Route::post('/service/update/{id}', [ServiceController::class,'update']);
Route::get('/service/get/{id}', [ServiceController::class,'getById']);
Route::delete('/service/destroy/{id}', [ServiceController::class,'destroy']);

Route::get('/team', [TeamController::class,'index']);
Route::post('/team', [TeamController::class,'create']);
Route::post('/team/update/{id}', [TeamController::class,'update']);
Route::get('/team/get/{id}', [TeamController::class,'getById']);
Route::delete('/team/destroy/{id}', [TeamController::class,'destroy']);

Route::get('/technologie', [TechnologieController::class,'index']);
Route::post('/technologie', [TechnologieController::class,'create']);
Route::post('/technologie/update/{id}', [TechnologieController::class,'update']);
Route::get('/technologie/get/{id}', [TechnologieController::class,'getById']);
Route::delete('/technologie/destroy/{id}', [TechnologieController::class,'destroy']);

Route::get('/expertise', [ExpertiseController::class,'index']);
Route::post('/expertise', [ExpertiseController::class,'create']);
Route::post('/expertise/update/{id}', [ExpertiseController::class,'update']);
Route::get('/expertise/get/{id}', [ExpertiseController::class,'getById']);
Route::delete('/expertise/destroy/{id}', [ExpertiseController::class,'destroy']);