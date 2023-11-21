<?php

use App\Http\Controllers\FaqbController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PaymentMethodDetailController;
use App\Http\Controllers\UserInfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('/user_info', UserInfoController::class);
Route::resource('/payment_method', PaymentMethodController::class);
Route::resource('/payment_method_detail', PaymentMethodDetailController::class);
Route::resource('/faqb', FaqbController::class);
Route::resource('/faqs', FaqsController::class);
