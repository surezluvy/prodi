<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Models\Category;
use App\Models\Post;
use App\Models\Page;
use App\Models\Lecturer;
use App\Models\Kurikulum;
use App\Models\Prestasi;

class HomeController extends Controller
{
    public function __construct()
    {
        $url = ucfirst(request()->segment(count(request()->segments())));
        $menus = Category::orderBy('urut', 'ASC')->get();
        $no = 1;
        // $menus = Category::where('child', 1)->orderBy('urut', 'ASC')->get();
        View::share('url', $url);
        View::share('menus', $menus);
        View::share('no', $no);
    }
    function index(){
        return view('home.index');
    }
    function post($id){
        // $data = Page::with('category')->get();
        // $data2 = Post::with('category')->get();
        // dd($data2);
        $pages = Page::where('category_id', $id)->get();
        $page = Page::with('category')->where('category_id', $id)->first();
        $posts = Post::where('category_id', $id)->get();
        $post = Post::with('category')->where('category_id', $id)->first();
        $cat = Category::where('category_id', $id)->first();
        // dd(count($posts));
        if(count($posts) != 0){
            return view('home.multiple', compact('posts', 'post')); 
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
