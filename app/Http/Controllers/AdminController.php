<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use View;
use App\Models\User;
use App\Models\Category;

class AdminController extends Controller
{
    public function __construct()
    {
        $url = ucfirst(request()->segment(count(request()->segments())));
        View::share('url', $url);
    }

    // DASHBOARD
    function index(){
        return view('admin.index');
    }

    // AUTH
    function login(){
        return view('admin.auth.login');
    }
    function loginProcess(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {-
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->with('error', 'Login gagal! Silahkan perbaiki data anda');
    }

    function test(){
        $menus = Category::where('parent_id', null)->get();
        $childs = Category::where('parent_id', '!=', null)->get();
        return view('test.index', compact('menus', 'childs'));
    }

}
