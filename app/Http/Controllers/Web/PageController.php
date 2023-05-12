<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Web\CategoryModel;
use App\Models\Web\PageModel;
use App\Models\Web\PostModel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getPageMenu($slug){
        $pages = PageModel::all()->where('slug', '=', $slug);

        return view('web.page.page_menu', compact('pages'));
    }
    public function getPageCategory($category_id){
        $categories = CategoryModel::all()->where('id', '=', $category_id);
        $posts = PostModel::all()->where('category_id', '=', $category_id);
        return view('web.page.page_category', compact('categories', 'posts'));
    }

    public function getPagePost($slug){
        $posts = PostModel::all()->where('slug', '=', $slug);
        return view('web.page.page_post', compact('posts'));
    }
}
