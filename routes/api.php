<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\FeedbackItemController;
use App\Http\Controllers\ContactFormSubmissionController;

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

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/services/{id}', [ServiceController::class, 'getByCategory']);

Route::post('/services-request/save', [ServiceRequestController::class, 'store']);

Route::post('/feedback/save', [FeedbackItemController::class, 'store']);

Route::post('/contact-submission/save', [ContactFormSubmissionController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
