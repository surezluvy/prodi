<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Models\Category;
use App\Models\Post;
use App\Models\Page;

class HomeController extends Controller
{
    public function __construct()
    {
        $url = ucfirst(request()->segment(count(request()->segments())));
        $menus = Category::where('parent_id', null)->orderBy('urut', 'ASC')->get();
        View::share('url', $url);
        View::share('menus', $menus);
    }
    function index(){
        return view('home.index');
    }
    function post($id){
        $posts = Post::where('category_id', $id)->get();
        $post = Post::with('category')->where('category_id', $id)->first();

        return view('home.multiple', compact('posts', 'post'));
        // $posts = Post::where('category_id', $id)->where('thumbnail', '=', null)->get();
        // if(count($posts) == 1){
        //     $post = Post::where('category_id', $id)->first();
        //     return view('home.single', compact('post'));
        // }else{
        //     $post = Post::with('category')->where('category_id', $id)->first();
        //     return view('home.multiple', compact('posts', 'post'));
        // }
    }
    function page($id){
        $page = Page::with('category')->where('id', $id)->first();
        return view('home.single', compact('page'));
    }
}
