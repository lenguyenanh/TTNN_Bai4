<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Categories;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index ()
    {
        $categories = Categories::all();
        return view('admin.category.list', compact('categories'));
    }
    public function create ()
    {
        return view ('admin.category.create');
    }
    public function store (Request $request )
    {
        $this-> validate($request, 
        [
            'name' => 'required'
        ]
       
    );
    Categories::create([
        'name' => $request->name,
        'description' => $request->description,
        'display_order' => $request->display_order, // sử dụng giá trị của biến $id
        'status' => $request->input('status'), // sử dụng giá trị được chọn từ form
    ]);
        return redirect()-> route('admin.category.index')-> with('success', 'tạo thành công');
    }
    public function edit ($id)
    {
        $category = Categories::find($id);
        
        return view('admin.category.edit', compact('category'));
    }
    public function update ($id, Request $request)
    {
        $this-> validate($request, 
        [
            'name' => 'required',
            'display_order'=> 'required'

        ]
       
    );
        $display_order = Str::slug($request->name);
        $checkSlug = Categories::where('display_order', $display_order)-> first();
        while ($checkSlug)
        {
            $display_order = $checkSlug->display_order . Str::random(2);
        }
        Categories::where('id',$id)->update([
            'name'=> $request->name,
            'description'=>$request->description,
            'display_order' =>$id,
            'status'=>$request->input ('status'),
        ]);
        return redirect()->route('admin.category.index',$id)-> with('success', 'cập nhật thành công');
    }
    public function delete ($id)
    {
        Categories::where('id', $id)->delete();
        return redirect()-> route('admin.category.index')-> with('success', 'xóa thành công');
    }
}
