<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.app');
});

// Admin: Bảng quản trị viên
// Users: Bảng người dùng
// Categories: Danh mục bài viết
// Post: Bài viết
// Tags:
// Comment: Bình luận người dùng

Route::get('/admin', function () {
    return view('admin.app');
});

Route::group(['prefix'=> '/admin/', 'namespace'=>'admin'], function () {
    Route::resource('categories', 'categoriesController');
    Route::resource('posts', 'postsController');
    Route::resource('tags', 'tagsController');
    Route::resource('users', 'usersController');
    Route::resource('admin','adminController');
});