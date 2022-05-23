<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Models\Prestasi;
use App\Models\Setting;

class PrestasiController extends Controller
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
        $prestasi = Prestasi::all();
        return view('admin.main.Data.prestasi.index', compact('prestasi'));
    }
    function addPrestasi(Request $request){
        Prestasi::create($request->all());
        return back();
    }
    function editPrestasi(Request $request, $id){
        Prestasi::where('prestasi_id', $id)->update([
            'name' => $request->name,
            'angkatan' => $request->angkatan,
            'kejuaraan' => $request->kejuaraan,
            'peringkat' => $request->peringkat,
        ]);
        return back();
    }
    function deletePrestasi($id){
        Prestasi::where('prestasi_id', $id)->delete();
        return back();
    }
}
