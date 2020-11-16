<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
//    return view('welcome');

//    $post=new Post();
//    $post->title ='test title';
//    $post->content='test content';
//    $post->save();

//    Post::create([
//        'title'     =>'test title2',
//        'content'   =>'test content2'
//    ]);

//    $post=\App\Models\Post::all();
//    dd($post);

//    $post=Post::find(1);
//    dd($post);

    $posts=Post::where('id', '<', "10")->orderBy('id','DESC')->get();
    dd($posts);
});


Route::get('posts'  , [\App\Http\Controllers\PostsController::class, 'index'])  ->name('posts.index');
Route::get('post'   , [\App\Http\Controllers\PostsController::class, 'show'])   ->name('posts.show');
Route::get('contact', [\App\Http\Controllers\PostsController::class, 'contact'])->name('posts.contact');
Route::get('about'  , [\App\Http\Controllers\PostsController::class, 'about'])  ->name('posts.about');
