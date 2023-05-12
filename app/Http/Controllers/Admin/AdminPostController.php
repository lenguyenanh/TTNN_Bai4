<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categories;
use App\Models\Admin\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(100);
        return view('admin.post.list', compact('posts'));
    }
    public function create()
    {
        $categories = Categories::all();
        $user = Auth::user();
        return view('admin.post.create', compact('categories', 'user'));
    }
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'title' => 'required',
                'content' => 'required',
                'display_order' => 'required',
                'slug' => 'required',
            ]
        );
        $author_id = Auth::id();
        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'category_id' => $request->category_id,
            'author_id' => $author_id,
            'display_order' => $request->display_order,
            'status' => $request->input('status'),
            'slug' => $request->input('slug'),
        ]);
        return redirect()->route('admin.post.index')->with('success', 'Thêm mới thành công');
    }
    public function edit($id)
    {
        $user = Auth::user();
        $post = Post::find($id);
        $categories = Categories::all();
        return view('admin.post.edit', compact('post', 'categories', 'user'));
    }
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'title' => 'required',
                'content' => 'required',
                'display_order' => 'required',
                'slug' => 'required',
            ]
        );
        $author_id = Auth::id();
        Post::where('id', $id)->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'author_id' => $author_id,
            'display_order' => $id,
            'status' => $request->input('status'),
            'slug' => $request->input('slug'),
        ]);
        return redirect()->route('admin.post.index', $id)->with('success', 'cập nhật thành công');
    }
    public function delete($id)
    {
        Post::find($id)->delete();
        return redirect()->route('admin.post.index')->with('success', 'xóa thành công');
    }
}
