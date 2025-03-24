<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeNutController;
use App\Http\Controllers\TypeScrewsController;
use App\Http\Controllers\TypeWasherController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/userRegister', [UsersController::class, 'createUser']);
Route::get('/users', [UsersController::class, 'index']);
Route::post('/userLogin', [UsersController::class, 'login']);
Route::post('/productRegister', [ProductController::class, 'createProduct']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/typeNuts', [TypeNutController::class, 'index']);
Route::get('/typeScrews', [TypeScrewsController::class, 'index']);
Route::get('/typeWashers', [TypeWasherController::class, 'index']);
