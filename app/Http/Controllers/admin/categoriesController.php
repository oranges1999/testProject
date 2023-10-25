<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $categories = DB::table('categories')->get(); // Biến collection
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
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

        return redirect()->to('/admin/categories');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit($id)
    {
        $category = DB::table('categories')->where('id','=', $id)->first(); // có thể dùng find, nhưng find chỉ tìm theo 1 trường nhất định, muốn chính xác hơn phải dùng where
        // dd($category); //std class
        return view ('admin.categories.edit', compact('category'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, $id)
    {


        $category['name'] = $request->name;
        // $category['created_at'] = now();
        $category['updated_at'] = now();
        $category['createdBy'] = '1';
        $category['imageUrl'] = 'abc.png';
        $category['slug'] = Str::slug($request->name);
        $category['status'] = $request->status;

        DB::table('categories')->where('id','=', $id)->update($category);

        return redirect()->to('/admin/categories');

    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(string $id)
    {
        DB::table('categories')->where('id','=', $id)->delete();
        return redirect()->to('/admin/categories');
    }
}