<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\User;
use Laracasts\Flash\Flash;

class AuthController extends Controller
{
    public function login()
    {
        return view ('admin.login.index');
    }
    public function checkLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->route('admin.category.index');
        }
        return redirect()->route('admin.auth.login')->with('error', 'Kiểm tra lại thông tin đăng nhập ! ');
    }
    public function logout ()
    {
        Auth::logout();
        return redirect() -> route('admin.auth.login')->with('success', 'Bạn đã đăng xuất thành công');
    }
    public function profile ()
    {
        return view('admin.login.profile');
    }
    public function updateProfile (Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            
        ]);
        $user = User::find(auth()->id());;   
        $date = [
            'name' => $request->name,
        ];
        if ($request->password)
        {
            $this->validate($request, [
                'password'=>'required |min:6|max:32',
                'confirm'=>'same:password',
            ]);
            $date['password'] = bcrypt($request->password);
        }
        $user->update($date);
        return redirect() -> route('admin.user.index')->with('success', 'cập nhật thành công');

    }
}
