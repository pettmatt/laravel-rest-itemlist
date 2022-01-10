<?php

use App\models\Item;
use App\Http\controllers\ItemsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ItemsController::class, 'frontpage']);
Route::get('/new', [ItemsController::class, 'add']);
Route::get('/items', [ItemsController::class, 'list']);
Route::get('/items/{item}', [ItemsController::class, 'single']);
Route::get('/items/{item}/update', [ItemsController::class, 'updatepage']);

Route::post('/items', [ItemsController::class, 'store']);
Route::post('/items/{item}', [ItemsController::class, 'update']);

Route::get('/delete/{item}', [ItemsController::class, 'delete']);