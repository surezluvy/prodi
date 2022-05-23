<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Page;
use App\Models\Lecturer;
use App\Models\Kurikulum;
use App\Models\Prestasi;
use App\Models\Setting;
use App\Models\Slider;

class HomeController extends Controller
{
    public function __construct()
    {
        $url = ucfirst(request()->segment(count(request()->segments())));
        $menus = Menu::orderBy('urut', 'ASC')->get();
        $no = 1;
        $setting = Setting::first();
        $sliders = Slider::all();
        // $menus = Menu::where('child', 1)->orderBy('urut', 'ASC')->get();
        View::share('url', $url);
        View::share('menus', $menus);
        View::share('no', $no);
        View::share('setting', $setting);
        View::share('sliders', $sliders);
    }
    function index(){
        return view('home.index');
    }
    function post($id){
        // $data = Page::with('menu')->get();
        // $data2 = Post::with('menu')->get();
        // dd($data2);
        $pages = Page::where('menu_id', $id)->get();
        $page = Page::with('menu')->where('menu_id', $id)->first();
        $posts = Post::where('menu_id', $id)->get();
        $post = Post::with('menu')->where('menu_id', $id)->first();
        $cat = Menu::where('menu_id', $id)->first();
        // dd($page->type);
        // dd(count($posts));
        if(count($posts) != 0){
            return view('home.blog.index', compact('posts', 'post'));
        }elseif(count($pages) != 0){
            if($page->type == 'dosen'){
                $dosen = Lecturer::all();
                return view('home.dosen', compact('page', 'dosen'));
            }elseif($page->type == 'kurikulum'){
                $kurikulum = Kurikulum::all();
                return view('home.kurikulum', compact('page', 'kurikulum'));
            }elseif($page->type == 'prestasi'){
                $prestasi = Prestasi::all();
                return view('home.prestasi', compact('page', 'prestasi'));
            }elseif($page->type == 'galery'){
                $prestasi = Prestasi::all();
                return view('home.prestasi', compact('page', 'prestasi'));
            }else{
                return view('home.single', compact('page'));
            }
        }else{
            return view('home.blank', compact('cat'));
        }
        // $posts = Post::where('menu_id', $id)->where('thumbnail', '=', null)->get();
        // if(count($posts) == 1){
        //     $post = Post::where('menu_id', $id)->first();
        //     return view('home.single', compact('post'));
        // }else{
        //     $post = Post::with('menu')->where('menu_id', $id)->first();
        //     return view('home.multiple', compact('posts', 'post'));
        // }
    }
    function postDetail($id){
        $post = Post::with('menu')->where('post_id', $id)->first();
        $newpost = Post::with('menu')->take(3)->get();
        return view('home.blog.detail', compact('post', 'newpost'));
    }
    function page($id){
        $page = Page::with('menu')->where('id', $id)->first();
        return view('home.single', compact('page'));
    }
}
