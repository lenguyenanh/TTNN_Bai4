<?php

//Web===========================================
use App\Http\Controllers\Web\PageController;
use App\Http\Controllers\Web\PostController;
use App\Http\Controllers\Web\WebController;

//Admin========================================== 
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\AdminMenuController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//===================================================WEB======================================================
Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('home', [WebController::class, 'home']);

Route::prefix('page/')->group(function(){
    Route::get('menu/{slug}', [PageController::class, 'getPageMenu'])->name('web.page.menu');
    Route::get('category/{category_id}', [PageController::class, 'getPageCategory'])->name('web.page.category');
    Route::get('post/{slug}', [PageController::class, 'getPagePost'])->name('web.page.post');
});

Route::get('search', [PostController::class, 'search'])->name('search');

//===================================================ADMIN======================================================
Route::prefix('admin')->group(function()
{
    Route::get('loginn', [AuthController::class, 'login'])
    ->name('admin.auth.login');
    Route::post('loginn', [AuthController::class, 'checkLogin'])
    ->name('admin.auth.check-login');

});

Route::prefix('admin')->middleware('admin.login')->group(function (){

    Route::get('logout', [AuthController::class, 'logout'])
    ->name ('admin.logout');

    Route::get('profile', [AuthController::class, 'profile'])
    ->name ('admin.profile.index');
        
    Route::put('profile', [AuthController::class, 'updateProfile'])
    -> name('admin.profile.update');

    Route::prefix('category')->group(function(){
        Route::get('', [CategoryController::class, 'index'])
        ->name('admin.category.index');

        Route::get('create', [CategoryController::class, 'create'])
        ->name('admin.category.create');

        Route::post('store', [CategoryController::class, 'store'])
        ->name('admin.category.store');

        Route::get('edit/{id}', [CategoryController::class, 'edit'])
        ->name('admin.category.edit');

        Route::put('update/{id}', [CategoryController::class, 'update'])
        ->name('admin.category.update');

        Route::get('delete/{id}', [CategoryController::class, 'delete'])
        ->name('admin.category.delete');
    });

    Route::prefix('post')->group(function(){
        Route::get('', [AdminPostController::class, 'index'])
        ->name('admin.post.index');

        Route::get('create', [AdminPostController::class, 'create'])
        ->name('admin.post.create');

        Route::post('store', [AdminPostController::class, 'store'])
        ->name('admin.post.store');

        Route::get('edit/{id}', [AdminPostController::class, 'edit'])
        ->name('admin.post.edit');

        Route::put('update/{id}', [AdminPostController::class, 'update'])
        ->name('admin.post.update');

        Route::get('delete/{id}', [AdminPostController::class, 'delete'])
        ->name('admin.post.delete');
    });

    Route::prefix('contact')->group(function(){
        Route::get('', [ContactController::class, 'index'])
        ->name('admin.contact.index');
        Route::get('delete/{id}', [ContactController::class, 'delete'])
        ->name('admin.contact.delete');
    });

    Route::prefix('user')->group(function(){
        Route::get('', [UserController::class, 'index'])
        ->name('admin.user.index');

        Route::get('create', [UserController::class, 'create'])
        ->name('admin.user.create');

        Route::post('store', [UserController::class, 'store'])
        ->name('admin.user.store');

        Route::get('edit/{id}', [UserController::class, 'edit'])
        ->name('admin.user.edit');

        Route::put('update/{id}', [UserController::class, 'update'])
        ->name('admin.user.update');

        Route::get('delete/{id}', [UserController::class, 'delete'])
        ->name('admin.user.delete');
    });

    Route::prefix('menus')->group(function(){
        Route::get('', [AdminMenuController::class, 'index'])
        ->name('admin.menu.index');

        Route::get('create', [AdminMenuController::class, 'create'])
        ->name('admin.menu.create');

        Route::post('store', [AdminMenuController::class, 'store'])
        ->name('admin.menu.store');

        Route::get('edit/{id}', [AdminMenuController::class, 'edit'])
        ->name('admin.menu.edit');

        Route::put('update/{id}', [AdminMenuController::class, 'update'])
        ->name('admin.menu.update');

        Route::get('delete/{id}', [AdminMenuController::class, 'delete'])
        ->name('admin.menu.delete');
    });

    Route::prefix('page')->group(function(){
        Route::get('', [AdminPageController::class, 'index'])
        ->name('admin.page.index');

        Route::get('create', [AdminPageController::class, 'create'])
        ->name('admin.page.create');

        Route::post('store', [AdminPageController::class, 'store'])
        ->name('admin.page.store');

        Route::get('edit/{id}', [AdminPageController::class, 'edit'])
        ->name('admin.page.edit');

        Route::put('update/{id}', [AdminPageController::class, 'update'])
        ->name('admin.page.update');

        Route::get('delete/{id}', [AdminPageController::class, 'delete'])
        ->name('admin.page.delete');
    });

    Route::prefix('link')->group(function(){
        Route::get('', [LinkController::class, 'index'])
        ->name('admin.link.index');

        Route::get('create', [LinkController::class, 'create'])
        ->name('admin.link.create');

        Route::post('store', [LinkController::class, 'store'])
        ->name('admin.link.store');

        Route::get('edit/{id}', [LinkController::class, 'edit'])
        ->name('admin.link.edit');

        Route::put('update/{id}', [LinkController::class, 'update'])
        ->name('admin.link.update');

        Route::get('delete/{id}', [LinkController::class, 'delete'])
        ->name('admin.link.delete');
    });

});