<?php


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

Route::get('/', function () {
    return view('posts', [
        'posts' => App\Models\Post::with('category', 'author')->get(),
        'categories' => App\Models\Category::all()
    ]);
})->name('home');

Route::get('/posts/{post:slug}', function (App\Models\Post $post) {
    return view('post', [
        'post' => $post
    ]);
});


Route::get('/categories/{category:slug}', function (App\Models\Category $category) {
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => App\Models\Category::all()
        // 'posts' => $category->posts->load(['category', 'author'])
    ]);
});

Route::get('/authors/{author:username}', function (App\Models\User $author) {
    return view('posts', [
        'posts' => $author->posts,
        'categories' => App\Models\Category::all()
        // 'posts' => $author->posts->load(['category', 'author'])
    ]);
});
