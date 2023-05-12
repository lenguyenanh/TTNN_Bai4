<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.list', compact('users'));
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required |min:6|max:32',
            'confirm' => 'same:password',
            'is_admin' => 'required'
        ]);
        User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'is_admin' => $request->is_admin,
            ]
        );
        return redirect()->route('admin.user.index')->with('success', 'tạo thành công');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'is_admin' => 'required'
        ]);
        $user = User::find($id);
        $date = [
            'name' => $request->name,
            'email' => $request->email,
            'is_admin' => $request->is_admin
        ];
        if ($request->password) {
            $this->validate($request, [
                'password' => 'required |min:6|max:32',
                'confirm' => 'same:password',
            ]);
            $date['password'] = bcrypt($request->password);
        }
        $user->update($date);
        return redirect()->route('admin.user.index', $user->id)->with('success', 'sửa thành công');
    }
    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.user.index')->with('success', 'xóa thành công');
    }
}
