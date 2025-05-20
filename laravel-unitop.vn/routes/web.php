<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get(('admin/post/add'), function () {
    return "admin thêm bài viết";
});
Route::get(('admin/post/update/{id}'), function ($id) {
    return "admin sửa bài viết có id {$id}";
});
Route::get(('admin/post/show'), function () {
    return "admin danh sách bài viết";
});
Route::get(('admin/post/delete/{id}'), function ($id) {
    return "admin xóa bài viết có id {$id}";
});