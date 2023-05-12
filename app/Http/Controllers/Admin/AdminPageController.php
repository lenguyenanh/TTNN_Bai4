<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPageController extends Controller
{
    public function index()
    {
        $pages = Pages::paginate(20);
        return view('admin.page.list', compact('pages'));
    }
    public function create()
    {
        $user = Auth::user(); // get authenticated user
        $pages = Pages::all();
        return view('admin.page.create', compact('pages', 'user')); // pass user to view
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'title' => 'required',
                'content' => 'required',
                'slug' => 'required',
            ]
        );
        $author_id = Auth::id();
        Pages::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'slug' => $request->input('slug'),
            'author_id' => $author_id,
        ]);
        return redirect()->route('admin.page.index')->with('success', 'Thêm mới thành công');
    }
    public function edit($id)
    {
        $user = Auth::user();
        $page = Pages::find($id);
        return view('admin.page.edit', compact('page', 'user'));
    }
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'title' => 'required',
                'content' => 'required',
                'slug' => 'required',
            ]
        );
        $author_id = Auth::id();
        Pages::where('id', $id)->update([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => $request->input('slug'),
            'author_id' => $author_id,
        ]);
        return redirect()->route('admin.page.index', $id)->with('success', 'cập nhật thành công');
    }

    public function delete($id)
    {
        Pages::find($id)->delete();
        return redirect()->route('admin.page.index')->with('success', 'xóa thành công');
    }
}
