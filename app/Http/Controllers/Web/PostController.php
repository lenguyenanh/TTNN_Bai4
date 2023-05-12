<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Web\PostModel;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function search(Request $request){
        $query = $request->input('search_query');
        $posts = PostModel::where('title', 'LIKE', '%'.$query.'%')->get();

        return view('web.page.page_search', compact('query', 'posts',));
    }
}
