<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Links;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $links = Links::all();
        return view('admin.link.list', compact('links'));
    }
    public function create()
    {
        return view('admin.link.create');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'title' => 'required',
                'url' => 'required'
            ]

        );

        Links::create([
            'title' => $request->title,
            'url' => $request->url,
        ]);
        return redirect()->route('admin.link.index')->with('success', 'tạo thành công');
    }

    public function edit($id)
    {
        $link = Links::find($id);
        return view('admin.link.edit', compact('link'));
    }
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'title' => 'required',
                'url' => 'required',
            ]

        );
        Links::where('id', $id)->update([
            'title' => $request->title,
            'url' => $request->url
        ]);
        return redirect()->route('admin.link.index', $id)->with('success', 'cập nhật thành công');
    }

    public function delete($id)
    {

        Links::where('id', $id)->delete();
        return redirect()->route('admin.link.index')->with('success', 'Xóa thành công.');
    }
}
