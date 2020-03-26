<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/posts','postController');
Route::get('/posts/{post}/categories','postController@allCategories')->name('post.allCategories');



Route::apiResource('/categories','CategoryController');
Route::get('/categories/{category}/posts','CategoryController@allPost')->name('category.allPost');




Route::prefix('posts')->group(function () {
   Route::apiResource('/{post}/comments','commentController');
});


