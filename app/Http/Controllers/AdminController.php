<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Menu;

class AdminController extends Controller
{
    // DASHBOARD
    function dashboard(){
        return view('admin.index');
    }
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
        $menus = Menu::where('menu_id_parent', null)->get();
        $childs = Menu::where('menu_id_parent', '!=', null)->get();
        return view('test.index', compact('menus', 'childs'));
    }

    function kirim(Request $request){
        $data1 = json_decode($request->test);
        for ($parent = 0; $parent < count($data1); $parent++) {
            if(isset($data1[$parent]->children)){
                for ($child = 0; $child < count($data1[$parent]->children); $child++) {
                    // echo $data1[$parent]->children[$child]->menu_id.' => '.$data1[$parent]->menu_id.'<br>';
                    Menu::where('menu_id', $data1[$parent]->children[$child]->menu_id)->update([
                        'menu_id_parent' => $data1[$parent]->menu_id,
                    ]);
                };
            }else{
                Menu::where('menu_id', $data1[$parent]->menu_id)->update([
                    'menu_id_parent' => null,
                ]);
            }
        };
        return back();
    }
}
