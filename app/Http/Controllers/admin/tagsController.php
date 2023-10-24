<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \Str;
class tagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = DB::table('tags')->get();
        return view('admin.tags.index', ['tags'=> $tags]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Tags['status'] = $request->status;
        $Tags['createBy'] = '1';
        $Tags['slug'] = Str::slug($request->name);
        $Tags['name'] = $request->name;
        $Tags['created_at'] = now();
        $Tags['updated_at'] = now();

        DB::table('tags')->insert($Tags);

        return redirect()->to('/admin/tags');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
