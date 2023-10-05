<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
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


//認証系ルート定義
Auth::routes();

// トップページ
Route::get('/', [PostsController::class, 'index']);

// 検索
Route::get('/search', [PostsController::class, 'search']);

// 更新
Route::get('post/{id}/update-form', [PostsController::class, 'updateForm']);
Route::post('post/update', [PostsController::class, 'update']);

// 削除
Route::get('post/{id}/delete', [PostsController::class, 'delete']);

// 投稿
Route::post('post/create', [PostsController::class, 'create']);
// 投稿
Route::post('post/createtest', [PostsController::class, 'create']);
