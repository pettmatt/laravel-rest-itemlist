<?php

use App\models\Item;
use App\Http\controllers\ItemsAPIController;
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

Route::get('/items', [ItemsAPIController::class, 'index']);
Route::get('/items/{item}', [ItemsAPIController::class, 'single']);

Route::post('/items', [ItemsAPIController::class, 'store']);

Route::put('/items/{item}', [ItemsAPIController::class, 'update']);

Route::delete('/items/{item}', [ItemsAPIController::class, 'delete']);