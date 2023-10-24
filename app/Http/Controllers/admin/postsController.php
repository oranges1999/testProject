<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('admin.posts.index', ['posts'=> $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post['categoryId'] = $request->categoryId;
        $post['title'] = $request->name;
        $post['slug'] = Str::slug($request->name);
        $post['imageUrl'] = 'abc.png';
        $post['content'] = $request->content;
        $post['createdBy'] = '1';
        $post['confirmedBy'] = '1';
        $post['view'] = 'dont know what this do';
        $post['created_at'] = now();
        $post['updated_at'] = now();

        DB::table('categories')->insert($$post);

        return redirect()->to('/admin/posts');
    }

    /**
     * Display the specified resource.
     */
//     public function show(posts $posts)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(posts $posts)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, posts $posts)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(posts $posts)
//     {
//         //
//     }
}
