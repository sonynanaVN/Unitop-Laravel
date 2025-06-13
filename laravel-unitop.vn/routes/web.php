<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
// Route::get('product/post/add', [ProductController::class, 'add']);
// Route::get('product/post/update/{id}', [ProductController::class, 'update']);
// Route::get('product/post/delete/{id}', [ProductController::class, 'delete']);
// Route::resource('post', PostController::class);

// Route::get('post/index', [PostController::class, 'index']);
// Sửa bài tập 7 view
Route::get('admin/post/show', [AdminPostController::class, 'show']);
Route::get('admin/post/update/{id}', [AdminPostController::class, 'update']);
Route::get('admin/post/add', [AdminPostController::class, 'add']);

Route::get('child',function () {
    return view('child',['data' => '41','post_title' => 'Bài viết 1']);
});
Route::get('for',function () {
    return view('for',['n' => 10]);
});
Route::get(('foreach'),function () {
    $users = array(
        1 => array(
            'name' => 'Nguyễn Văn A',
            'email' => 'A@gmail.com'
        ),
        2 => array(
            'name' => 'Nguyễn Văn B',
            'email' => 'B@gmail.com'
        ),
    );
        return view('foreach', ['users' => $users]);
});
route::get('include', function () {
    return view('include');
});
route::get('users/insert', function () {
    DB::table('users')->insert([
        'name' => 'Nguyễn Văn B',
        'email' => 'B@gmail.com',
        'password' => bcrypt('123456')
    ]);
});
route::get('post/add', [PostController::class, 'add']);