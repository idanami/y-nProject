<?php

use App\Http\Controllers\PollController;
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

Route::get('/poll/{poll}/option/{option}',[PollController::class,'submitVote']);


Route::post('/poll/add-poll',[PollController::class,'addPoll'])->middleware('checkKey');
Route::post('/poll/votes',[PollController::class,'pollList'])->middleware('checkKey');
