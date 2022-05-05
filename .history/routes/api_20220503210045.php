<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/posts', [PostController::class, 'index']);
Route::post('/post/store', [PostController::class, 'store']);
Route::get('/post/show/{post}', [PostController::class, 'show']);
Route::delete('/post/destroy', [PostController::class, 'destroy']);
Route::post('/comment/store', [CommentController::class, 'store']);
Route::get('/comment/show', [CommentController::class, 'show']);

Route::post('/like/store', [LikeController::class, 'store']);
Route::delete('/like/destroy', [LikeController::class, 'destroy']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::delete('/like/destroy/{id}', [LikeController::class, 'destroy']);

Route::delete('/post/destroy/{id}', [PostController::class, 'destroy']);


Route::post('/user/store', [UserController::class, 'store']);


Route::get('/relation', [POstController::class, 'relate']);