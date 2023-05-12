<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Menus;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    public function index()
    {
        $menus = Menus::all();
        return view('admin.menu.list', compact('menus'));
    }
    public function create()
    {
        $menus = Menus::whereNull('id_parent')
            ->whereNotIn('id', [1, 2])
            ->get();
        return view('admin.menu.create', compact('menus'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'id_parent' => 'required',
            'url' => 'required',
        ]);

        Menus::create([
            'title' => $request->title,
            'url' => $request->url,
            'id_parent' => $request->id_parent,
        ]);

        return redirect()->route('admin.menu.index')->with('success', 'Tạo thành công');
    }

    public function edit($id)
    {
        $menu = Menus::find($id);
        if ($menu && ($menu->id == 1 || $menu->id == 2)) {
            return redirect()->route('admin.menu.index')->with('error', 'Không thể sửa menu này');
        }
        $menus = Menus::whereNull('id_parent')->get();
        return view('admin.menu.edit', compact('menu', 'menus'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'id_parent' => 'required',
            'url' => 'required',
        ]);

        $menu = Menus::find($id);
        $menu->update([
            'title' => $request->title,
            'url' => $request->url,
            'id_parent' => $request->id_parent,
        ]);

        return redirect()->route('admin.menu.index', $id)->with('success', 'Sửa thành công!');
    }

    public function delete($id)
    {
        if ($id == 1 || $id == 2) {
            return redirect()->route('admin.menu.index')->with('error', 'Không thể xóa menu này.');
        }

        Menus::where('id', $id)->delete();
        return redirect()->route('admin.menu.index')->with('success', 'Xóa thành công.');
    }
}
