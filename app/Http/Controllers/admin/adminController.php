<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::orderBy('id','DESC')->paginate(2);
        return view ("admin.admin.index", compact("admins"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("admin.admin.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $admin = $request->only("name","email");
        $admin['password'] = hash::make($request->password);
        if($request->hasFile('avatar')){
            $path = $request->file('avatar')->store('public');
            $admin['avatar'] = $path;
            // $image = $request->file('avatar'); //lay anh
            // $originalName = $image->getClientOriginalName(); //lay ten anh
            // $image->storeAs('public/images', $originalName); // luu anh vao thu muc public/images
            // $admin['avatar'] = '/images/'.$originalName;
        }

        // dd($adm
        Admin::create($admin);
        return redirect()->route('admin.index')->with('success','them moi thanh cong');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        return view ('admin.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        $dataAdmin = $request->only('name','email');
        if($request->password){
            $dataAdmin['password'] = hash::make($request->password);
        }
        if($request->hasFile('avatar')){
            $path = $request->file('avatar')->store('public');
            $dataAdmin['avatar'] = $path;

            $file = $admin->avatar;
            
            if ($admin->avatar && Storage::exists($file)) {
                Storage::delete($file);
            }

        }

        if(! $admin->update($dataAdmin)){
            return redirect()->route('admin.index')->with('error','sua khong thanh cong');
        };
        return redirect()->route('admin.index')->with('success','sua thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    
    {
        $file = $admin->avatar;

        if ($admin->avatar && Storage::exists($file)) {
            Storage::delete($file);
        }
        if(! $admin->delete()){
            return redirect()->route('admin.index')->with('error','xoa that bai');
        }
        return redirect()->route('admin.index')->with('success','xoa thanh cong');
    }
}