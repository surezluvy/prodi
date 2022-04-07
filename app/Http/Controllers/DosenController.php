<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Models\Lecturer;
use App\Models\Education;
use App\Models\Expertise;

class DosenController extends Controller
{
    public function __construct()
    {
        $no =1;
        $url = ucfirst(request()->segment(count(request()->segments())));
        View::share('url', $url);
        View::share('no', $no);
    }
    function index(){
        $dosens = Lecturer::with('Expertise', 'Education')->get();
        return view('admin.main.dosen.index', compact('dosens'));
    }
    function addDosen(Request $request){
        Lecturer::create($request->all());
        return back();
    }
    function editDosen(Request $request, $id){
        Lecturer::where('lecturer_id', $id)->update([
            'name' => $request->name,
            'code' => $request->code,
            'nidn' => $request->nidn,
            'education' => $request->education,
            'expertise' => $request->expertise,
        ]);
        return back();
    }
    function deleteDosen($id){
        Lecturer::where('lecturer_id', $id)->delete();
        return back();
    }
    // function editDosen(Request $request, $id){
    //     $edu = explode(", ",$request->education);
    //     $eduId = explode(", ",$request->educationId);
    //     $exp = explode(", ",$request->expertise);
    //     $expId = explode(", ",$request->expertiseId);

    //     if(count($edu) >= count($eduId)){
    //         for($i = 0; $i < count($eduId); $i++){
    //             $eduInput = trim($edu[$i], ',');
    //             Education::where('education_id', $eduId[$i])->update([
    //                 'name' => trim($edu[$i], ','),
    //             ]);
    //         }
    //         for($i = count($eduId)-1; $i < count($edu); $i++){
    //             $eduInput = trim($edu[$i], ',');
    //             Education::create([
    //                 'lecturer_id' => $id,
    //                 'name' => trim($edu[$i], ','),
    //             ]);
    //         }
    //     }else{
    //         for($i = 0; $i < count($eduId); $i++){
    //             if(!isset($edu[$i])){
    //                 $id = intval($eduId[$i])-1;
    //                 Education::where('education_id', $id)->delete();
    //             }
    //         }
    //     }

    //     if(count($exp) >= count($expId)){
    //         for($i = 0; $i < count($expId); $i++){
    //             $expInput = trim($exp[$i], ',');
    //             Expertise::where('expertise_id', $expId[$i])->update([
    //                 'name' => $eduInput,
    //             ]);
    //         }
    //         for($i = count($expId)-1; $i < count($exp); $i++){
    //             $expInput = trim($exp[$i], ',');
    //             Expertise::create([
    //                 'lecturer_id' => $id,
    //                 'name' => $expInput,
    //             ]);
    //         }
    //     }else{
    //         for($i = 0; $i < count($expId); $i++){
    //             if(!isset($exp[$i])){
    //                 $id = intval($expId[$i])-1;
    //                 Expertise::where('expertise_id', $id)->delete();
    //             }
    //         }
    //     }
    //     return back();
    //     // $dosen = Education::where('lecturer_id', $id)->update([
    //     //     'name' => $request->name,
    //     // ]);
    //     // dd($dosen);
    //     // dd(explode(", ",$request->education));
    // }
}
