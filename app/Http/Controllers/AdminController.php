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
    function menu(){
<<<<<<< Updated upstream
        $no = 1;
        $sub_no = 1;
        $menus = Menu::where('menu_id_parent', null)->orderBy('urut', 'ASC')->get();
        // return $menus;
        return view('admin.menu', compact('menus', 'no', 'sub_no'));
    }
    function kirim(Request $request){
        $data1 = json_decode($request->test);
        for ($parent = 0; $parent < count($data1); $parent++) {
            if(isset($data1[$parent]->children)){
                $no = $parent+1;
                // $urut = $data1[$parent]->urut;
                // echo $no.'=>'.$data1[$parent]->urut.'<br>';
                Menu::where('menu_id', $data1[$parent]->menu_id)->update([
                    'urut' => $no,
                ]);
                for ($child = 0; $child < count($data1[$parent]->children); $child++) {
                    $no1 = $child+1;
                    $urut = $data1[$parent]->urut.'.'.$no1;
                    // echo $no1.'=>'.$data1[$parent]->urut.'=='.$urut.'<br>' ;
                    Menu::where('menu_id', $data1[$parent]->children[$child]->menu_id)->update([
                        'menu_id_parent' => $data1[$parent]->menu_id,
                        'urut' => $urut,
                    ]);
                    // echo 'child<br>';
                    // Menu::where('menu_id', $data1[$parent]->children[$child]->menu_id)->update([
                    //     'menu_id_parent' => $data1[$parent]->menu_id,
                    // ]);
                };
            }else{
                $no2 = $parent+1;
                // $urut = $data1[$parent]->urut;
                // echo $no.'=>'.$data1[$parent]->urut.'<br>';
                Menu::where('menu_id', $data1[$parent]->menu_id)->update([
                    'menu_id_parent' => null,
                    'urut' => $no2,
                ]);
            }
        };
        return back();
=======
        $menus = Menu::where('menu_id_parent', null)->get();
        $childs = Menu::where('menu_id_parent', '!=', null)->get();
        return view('admin.menu', compact('menus', 'childs'));
>>>>>>> Stashed changes
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
        $menus = Menu::where('menu_id_parent', null)->get();
        $childs = Menu::where('menu_id_parent', '!=', null)->get();
        return view('test.index', compact('menus', 'childs'));
    }

}
