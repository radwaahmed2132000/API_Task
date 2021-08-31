<?php

use App\Http\Controllers\PostsController;
use App\Models\Posts;
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
// POST request to add new posts
Route::post('/addnewpost',[PostsController::class,'add'] );
// show specific post
Route::get('/posts/{post}', [PostsController::class,'show']);
// show all posts
Route::get('/posts', [PostsController::class,'index']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
