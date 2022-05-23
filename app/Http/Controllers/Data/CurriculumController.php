<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Models\Kurikulum;
use App\Models\Setting;

class CurriculumController extends Controller
{
    public function __construct()
    {
        $no =1;
        $setting = Setting::first();
        $url = ucfirst(request()->segment(count(request()->segments())));
        View::share('url', $url);
        View::share('no', $no);
        View::share('setting', $setting);
    }
    function index(){
        $kurikulum = Kurikulum::all();
        return view('admin.main.Data.curriculum.index', compact('kurikulum'));
    }
    function addKurikulum(Request $request){
        Kurikulum::create($request->all());
        return back();
    }
    function editKurikulum(Request $request, $id){
        Kurikulum::where('kurikulum_id', $id)->update([
            'code' => $request->code,
            'name' => $request->name,
            'syarat_ambil' => $request->syarat_ambil,
            'syarat_lulus' => $request->syarat_lulus,
            'jenis_mk' => $request->jenis_mk,
            'sks' => $request->sks,
        ]);
        return back();
    }
    function deleteKurikulum($id){
        Kurikulum::where('kurikulum_id', $id)->delete();
        return back();
    }
}
