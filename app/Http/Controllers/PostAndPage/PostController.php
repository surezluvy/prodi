<?php

namespace App\Http\Controllers\PostAndPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Models\Post;
use App\Models\Menu;
use App\Models\Category;

class PostController extends Controller
{
    public function __construct()
    {
        $url = ucfirst(request()->segment(count(request()->segments())));
        $setting = Setting::first();
        $no = 1;
        View::share('url', $url);
        View::share('no', $no);
        View::share('setting', $setting);
    }
    function index(){
        $posts = Post::with('menu')->get();
        $categories = Menu::where('parent_id', null)->orderBy('urut', 'ASC')->get();
        // dd(Post::with('menu')->where('menu_id', 1)->get());

        return view('admin.main.PostAndPage.Post.index', compact('posts', 'categories'));
    }
    function pages(){
        $posts = Post::with('menu', 'category')->where('thumbnail', '=', null)->get();
        $categories = Menu::where('parent_id', null)->orderBy('urut', 'ASC')->get();
        // dd(Post::with('menu')->where('menu_id', 1)->get());

        return view('admin.main.PostAndPage.Post.index', compact('posts', 'categories'));
    }
    function addPost(){
        $menus = Menu::where('link', null)->where('child', 1)->orderBy('urut', 'ASC')->get();
        $categories = Category::all();
        return view('admin.main.PostAndPage.Post.add-post', compact('menus', 'categories'));
    }
    function addPostProcess(Request $request){
        $validateData = $request->validate([
            'title' => 'required',
            'menu_id' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'content' => 'required',
        ]);
        if($request->category_id){
            $validateData['category_id'] = $request->category_id;
        }
        $image = $request->file('thumbnail');
        $image->storeAs('public/thumbnail', $image->hashName());
        $validateData['thumbnail'] = $image->hashName();
        Post::create($validateData);
        return redirect()->route('admin-post');
    }
    function editPost($id){
        $post = Post::with('menu', 'category')->where('post_id', $id)->first();
        $menus = Menu::where('link', null)->where('child', 1)->orderBy('urut', 'ASC')->get();
        $categories = Category::all();
        // $categories = Menu::where('parent_id', '!=', null)->orderBy('urut', 'ASC')->get();
        return view('admin.main.PostAndPage.Post.edit-post', compact('categories', 'post', 'menus'));
    }
    function editPostProcess(Request $request){
        $validateData = $request->validate([
            'title' => 'required',
            'menu_id' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'content' => 'required',
        ]);
        if($request->hasFile('thumbnail')){
            $image = $request->file('thumbnail');
            $image->storeAs('public/thumbnail', $image->hashName());
            $validateData['thumbnail'] = $image->hashName();
        }
        Post::where('post_id', $request->id)->update($validateData);
        return redirect()->route('admin-post');
        // Post::where('post_id', $request->id)->update([
        //     'menu_id' => $request->menu_id,
        //     'title' => ucfirst($request->title),
        //     'content' => $request->content
        // ]);
        // return redirect()->route('admin-post');
    }
    function deletePost($id){
        Post::where('post_id', $id)->delete();
        return back();
    }
}
