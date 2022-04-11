<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function __construct()
    {
        $url = ucfirst(request()->segment(count(request()->segments())));
        $no = 1;
        View::share('url', $url);
        View::share('no', $no);
    }
    function index(){
        $posts = Post::with('category')->get();
        $categories = Category::where('parent_id', null)->orderBy('urut', 'ASC')->get();
        // dd(Post::with('category')->where('category_id', 1)->get());

        return view('admin.main.post.post', compact('posts', 'categories'));
    }
    function pages(){
        $posts = Post::with('category')->where('thumbnail', '=', null)->get();
        $categories = Category::where('parent_id', null)->orderBy('urut', 'ASC')->get();
        // dd(Post::with('category')->where('category_id', 1)->get());

        return view('admin.main.post.page', compact('posts', 'categories'));
    }
    function addPost(){
        $menus = Category::where('link', null)->where('child', 1)->orderBy('urut', 'ASC')->get();
        return view('admin.main.post.add-post', compact('menus'));
    }
    function addPostProcess(Request $request){
        $image = $request->file('thumbnail');
        $image->storeAs('public/thumbnail', $image->hashName());
        Post::create([
            'category_id' => $request->category_id,
            'title' => ucfirst($request->title),
            'content' => $request->content,
            'thumbnail' => $image->hashName()
        ]);
        return redirect()->route('admin-post');
    }
    function editPost($id){
        $post = Post::with('category')->where('post_id', $id)->first();
        $categories = Category::where('parent_id', '!=', null)->orderBy('urut', 'ASC')->get();
        return view('admin.main.post.edit-post', compact('categories', 'post'));
    }
    function editPostProcess(Request $request){
        Post::where('post_id', $request->id)->update([
            'category_id' => $request->category_id,
            'title' => ucfirst($request->title),
            'content' => $request->content
        ]);
        return redirect()->route('admin-post');
    }
    function deletePost($id){
        Post::where('post_id', $id)->delete();
        return back();
    }
}
