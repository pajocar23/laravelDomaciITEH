<?php

use App\Http\Controllers\BookApiController;
use App\Http\Controllers\BookListApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Models\book_list;

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

//BOOK API
Route::get('/book', [BookApiController::class,'getAll']);
Route::post('/book', [BookApiController::class,'insert']);
Route::put('/book/{book}', [BookApiController::class,'update']);
Route::delete('/book/{book}', [BookApiController::class,'destroy']);

//BOOK LIST API
Route::get('/book_lists', [BookListApiController::class,'getAll']);
Route::post('/book_lists', [BookListApiController::class,'insert']);
Route::put('/book_lists/{book_lists}', [BookListApiController::class,'update']);
Route::delete('/book_lists/{book_lists}', [BookListApiController::class,'destroy']);


?>





