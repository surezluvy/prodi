<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use View;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Setting;

class HomeSettingController extends Controller
{
    public function __construct()
    {
        $setting = Setting::first();
        $url = ucfirst(request()->segment(count(request()->segments())));
        $no = 1;
        View::share('url', $url);
        View::share('no', $no);
        View::share('setting', $setting);
    }
    function index(){
        $sliders = Slider::all();
        // dd(Slider::with('menu')->where('menu_id', 1)->get());

        return view('admin.main.home.slider', compact('sliders'));
    }
    function addSlider(Request $request){
        // $image       = $request->file('image');
        // $filename    = $image->getClientOriginalName();

        // $image_resize = Image::make($image->getRealPath());
        // $image_resize->resize(1920, 770);
        // $image_resize->save(public_path('slider/'.$filename));
        $image = $request->file('image');
        $img = Image::make($request->file('image')->getRealPath());
        // storage_path('app/public/'.$path.'/'.$filename)
        $img->resize(1920, 770)->save(storage_path('app/public/ayam'.$image->hashName()));
        dd($img);
        // $image = $request->file('image');
        // $path = $image->storeAs('public/slider', $image->hashName());
        // Image::make(storage_path('public/storage/'.$image))->resize(150,150)->save();
        // Slider::create([
        //     'title' => ucfirst($request->title),
        //     'subtitle' => ucfirst($request->subtitle),
        //     'image' => $image->filename()
        // ]);
        // return redirect()->route('admin-slider');
    }
    function editSlider(Request $request){
        $image = $request->file('image');
        $image->storeAs('public/slider', $image->hashName());
        Slider::where('slider_id', $request->id)->update([
            'title' => ucfirst($request->title),
            'subtitle' => ucfirst($request->subtitle),
            'image' => $image->hashName()
        ]);
        return redirect()->route('admin-slider');
    }
    function deleteSlider($id){
        Slider::where('slider_id', $id)->delete();
        return back();
    }
}
