<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlockchainController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user/rank/{userId}', [UserController::class, 'getUserRank']);
Route::get('/referral/leaderboard', [ReferralController::class, 'getLeaderboard']);
Route::get('/platform/analytics', [AnalyticsController::class, 'getPlatformAnalytics']);
Route::get('/balance/{address}', [BlockchainController::class, 'getBalance']);
Route::post('/transfer', [BlockchainController::class, 'transferTokens']);
