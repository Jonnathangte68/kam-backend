<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\FeedbackItemController;
use App\Http\Controllers\ContactFormSubmissionController;
use App\Http\Controllers\SubategoryController;
use App\Http\Controllers\ChatThreadController;
use App\Http\Controllers\ChatMessageController;


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

Route::get('/types', [CategoryController::class, 'getCategoriesCombined']);

Route::post('/services-request/save', [ServiceRequestController::class, 'store']);

Route::post('/feedback/save', [FeedbackItemController::class, 'store']);

Route::post('/contact-submission/save', [ContactFormSubmissionController::class, 'store']);

Route::post('/send-message', [ChatMessageController::class, 'store']);



// Authenticated user admin only

Route::get('/subcategories', [SubategoryController::class, 'index']);
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/service-request', [ServiceRequestController::class, 'index']);
Route::get('/contacts', [ContactFormSubmissionController::class, 'index']);
Route::get('/threads', [ChatThreadController::class, 'index']);
Route::get('/messages/{id}', [ChatMessageController::class, 'show']);

Route::post('/category', [CategoryController::class, 'store']);
Route::put('/category', [CategoryController::class, 'update']);
Route::post('/subcategory', [SubategoryController::class, 'store']);
Route::put('/subcategory', [SubategoryController::class, 'update']);
Route::post('/services', [ServiceController::class, 'store']);
Route::put('/services', [ServiceController::class, 'update']);
Route::post('/message-reply', [ChatThreadController::class, 'store']);

Route::delete('/category/{id}', [CategoryController::class, 'destroy']);
Route::delete('/subcategory/{id}', [SubategoryController::class, 'destroy']);
Route::delete('/service/{id}', [ServiceController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
