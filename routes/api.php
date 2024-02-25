<?php

use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\UserBookContrller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('/book', BookController::class);
Route::get('user/{userID}/book',[UserBookContrller::class,'getBooksByUser']);
Route::get('book/{bookID}/book',[UserBookContrller::class,'getUsersByBook']);
Route::delete('user/{userID}/book/{bookID}',[UserBookContrller::class,'detach']);
Route::post('user/{userID}/book/{bookID}',[UserBookContrller::class,'attach']);
Route::put('user/{userID}/book/{bookID}',[UserBookContrller::class,'modifyQuantity']);
