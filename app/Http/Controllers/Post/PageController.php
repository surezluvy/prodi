<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Models\Page;
use App\Models\Category;

class PageController extends Controller
{
    public function __construct()
    {
        $url = ucfirst(request()->segment(count(request()->segments())));
        $no = 1;
        View::share('url', $url);
        View::share('no', $no);
    }
    function index(){
        $pages = Page::with('category')->get();
        $categories = Category::where('parent_id', null)->orderBy('urut', 'ASC')->get();
        // dd(Page::with('category')->where('category_id', 1)->get());

        return view('admin.main.post.page', compact('pages', 'categories'));
    }
    function addPage(){
        $categories = Category::where('parent_id', '!=', null)->orderBy('urut', 'ASC')->get();
        return view('admin.main.post.add-page', compact('categories'));
    }
    function addPageProcess(Request $request){
        Page::create([
            'category_id' => $request->category_id,
            'title' => ucfirst($request->title),
            'content' => $request->content,
        ]);
        return redirect()->route('admin-page');
    }
    function editPage($id){
        $page = Page::with('category')->where('page_id', $id)->first();
        $categories = Category::where('parent_id', '!=', null)->orderBy('urut', 'ASC')->get();
        return view('admin.main.post.edit-page', compact('categories', 'page'));
    }
    function editPageProcess(Request $request){
        Page::where('page_id', $request->id)->update([
            'category_id' => $request->category_id,
            'title' => ucfirst($request->title),
            'content' => $request->content
        ]);
        return redirect()->route('admin-page');
    }
    function deletePage($id){
        Page::where('page_id', $id)->delete();
        return back();
    }
}
