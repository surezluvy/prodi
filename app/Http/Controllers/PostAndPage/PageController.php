<?php

namespace App\Http\Controllers\PostAndPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Models\Page;
use App\Models\Menu;

class PageController extends Controller
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
        $pages = Page::with('menu')->get();
        $categories = Menu::where('parent_id', null)->orderBy('urut', 'ASC')->get();
        // dd(Page::with('menu')->where('menu_id', 1)->get());

        return view('admin.main.PostAndPage.Page.index', compact('pages', 'categories'));
    }
    function addPage(){
        $categories = Menu::where('link', null)->where('child', 1)->orderBy('urut', 'ASC')->get();
        return view('admin.main.PostAndPage.Page.add-page', compact('categories'));
    }
    // function addPage(){
    //     $categories = Menu::where('parent_id', '!=', null)->orderBy('urut', 'ASC')->get();
    //     return view('admin.main.PostAndPage.Page.add-page', compact('categories'));
    // }
    function addPageProcess(Request $request){
        Page::create([
            'menu_id' => $request->menu_id,
            'title' => ucfirst($request->title),
            'type' => $request->type,
            'content' => $request->content,
        ]);
        return redirect()->route('admin-page');
    }
    function editPage($id){
        $page = Page::with('menu')->where('page_id', $id)->first();
        $categories = Menu::where('parent_id', '!=', null)->orderBy('urut', 'ASC')->get();
        return view('admin.main.PostAndPage.Page.edit-page', compact('categories', 'page'));
    }
    function editPageProcess(Request $request){
        Page::where('page_id', $request->id)->update([
            'menu_id' => $request->menu_id,
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
