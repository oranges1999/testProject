<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Str;
use Illuminate\Support\Facades\DB;

class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $categories = DB::table('categories')->get();
        return view('admin.categories.index', ['categories'=> $categories]);
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
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}


    
    

