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

        return view('admin.main.post', compact('posts', 'categories'));
    }
    function addPost(){
        $categories = Category::where('parent_id', '!=', null)->orderBy('urut', 'ASC')->get();
        return view('admin.main.add-post', compact('categories'));
    }
    function addPostProcess(Request $request){
        Post::create([
            'category_id' => $request->category_id,
            'title' => ucfirst($request->title),
            'content' => $request->content
        ]);
        return redirect()->route('admin-post');
    }
    function editPost($id){
        $post = Post::with('category')->where('post_id', $id)->first();
        $categories = Category::where('parent_id', '!=', null)->orderBy('urut', 'ASC')->get();
        return view('admin.main.edit-post', compact('categories', 'post'));
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
