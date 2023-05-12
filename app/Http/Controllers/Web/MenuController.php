<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Web\MenuModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $pages = MenuModel::whereNull('id_parent')->with('children')->get();

        return view('web.menu.index', compact('menus'));
    }
}
