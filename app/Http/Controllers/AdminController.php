<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use View;
use App\Models\User;
use App\Models\Menu;
use App\Models\Setting;

class AdminController extends Controller
{
    public function __construct()
    {
        $setting = Setting::first();
        $url = ucfirst(request()->segment(count(request()->segments())));
        View::share('url', $url);
        View::share('setting', $setting);
    }

    // DASHBOARD
    function index(){
        return view('admin.index');
    }
    function setting(){
        $data = Setting::first();
        return view('admin.setting', compact('data'));
    }
    function settingUpdate(Request $request){
        $data = Setting::where('setting_id', $request->id);

        if($request->logo){
            $validateData = $request->validate([
                'logo' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $image = $request->file('logo');
            $image->storeAs('public/setting', $image->hashName());
            $validateData['logo'] = $image->hashName();
            $data->update([
                'logo' => $validateData['logo'],
                'title' => $request->title,
                'description' => $request->description,
                'phone' => $request->phone,
                'email' => $request->email,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram
            ]);
        }else{
            $data->update([
                'title' => $request->title,
                'description' => $request->description,
                'phone' => $request->phone,
                'email' => $request->email,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram
            ]);
        }

        return back();
        // return view('admin.setting', compact('data'));
    }

    // AUTH
    function register(){
        return view('admin.auth.reg');
    }
    function registerProcess(Request $request){
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        User::create($validateData);

        return redirect('admin/login')->with('success', 'Berhasil mendaftar! Silahkan masuk');
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

    function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('admin/login')->with('success', 'Berhasil logout.');
    }

}
