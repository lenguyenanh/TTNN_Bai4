<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Web\CategoryModel;
use App\Models\Web\PostModel;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        $categories = CategoryModel::all();
        $posts = PostModel::all();
        return view('web.home.home', compact('categories', 'posts'));
    }
    
}
