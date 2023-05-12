<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Web\PostController;
use App\Models\Web\LinkModel;
use App\Models\Web\MenuModel;
use App\Models\Web\PostModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        view()->composer('web/*', function ($view) {
            $menus = MenuModel::whereNull('id_parent')->with('children')->get();
            $view->with('menus', $menus);

            $links = LinkModel::all();
            $view->with('links', $links);
        });
        view()->composer('web/layout/sidebar', function ($view) {
            $posts = PostModel::all();
            $view->with('posts', $posts);
        });
        
    }
}
