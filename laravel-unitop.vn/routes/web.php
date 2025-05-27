<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get(('admin/post/add'), function () {
//     return "admin thêm bài viết";
// });
// Route::get(('admin/post/update/{id}'), function ($id) {
//     return "admin sửa bài viết có id {$id}";
// });
// Route::get(('admin/post/show'), function () {
//     return "admin danh sách bài viết";
// });
// Route::get(('admin/post/delete/{id}'), function ($id) {
//     return "admin xóa bài viết có id {$id}";
// });


// Route::get('product/post/show/{id}', [ProductController::class, 'show']);
// Route::get('product/post/create', [ProductController::class, 'create']);
// Route::get('product/post/update/{id}', [ProductController::class, 'update']);
// Route::get('product/post/delete/{id}', [ProductController::class, 'delete']);
// Route::resource('post', PostController::class);

// Route::get('post/index', [PostController::class, 'index']);
Route::get('admin/post/show', [AdminPostController::class, 'show']);