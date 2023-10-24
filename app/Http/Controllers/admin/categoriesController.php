<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Str;
use \DB;

class categoriesController extends Controller
{
    public function create()
    {
        return view("admin.categories.create");
    }
    
    public function store(Request $request)
    {
        $category['name'] = $request->name;
        $category['created_at'] = now();
        $category['updated_at'] = now();
        $category['createdBy'] = '1';
        $category['imageUrl'] = 'abc.png';
        $category['slug'] = Str::slug($request->name);
        $category['status'] = $request->status;

        DB::table('categories')->insert($category);

        return redirect()->to('/admin/category');
    }

    public function index()
    {
        return view('admin.categories.index');
    }
}

// Bài Tập:
// Tạo Admin
// Tạo Post
// Tạo Tag
// Tìm hiểu cách hiển thị dữ liệu ra
// DB::table(name)->get() => Lấy data
// gợi ý Truyền data sang view index
// foreach để hiển thị
