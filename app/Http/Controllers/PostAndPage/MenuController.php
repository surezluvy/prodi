<?php

namespace App\Http\Controllers\PostAndPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Models\Menu;

class MenuController extends Controller
{
    public function __construct()
    {
        $url = ucfirst(request()->segment(count(request()->segments())));
        $setting = Setting::first();
        View::share('url', $url);
        View::share('setting', $setting);
    }
    function sortCategory(Request $request){
        $data1 = json_decode($request->test);
        // dd($data1[0]->children[0]);
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
                        'parent_id' => $data1[$parent]->menu_id,
                        'urut' => $urut,
                    ]);
                    Menu::where('menu_id', $data1[$parent]->menu_id)->update([
                        'child' => null
                    ]);
                    if(isset($data1[$parent]->children[0])){
                        Menu::where('menu_id', $data1[$parent]->children[$child]->menu_id)->update([
                            'child' => 1
                        ]);
                    }else{
                        Menu::where('menu_id', $data1[$parent]->children[$child]->menu_id)->update([
                            'child' => null
                        ]);
                    }
                    // echo 'child<br>';
                    // Menu::where('menu_id', $data1[$parent]->children[$child]->menu_id)->update([
                    //     'parent_id' => $data1[$parent]->menu_id,
                    // ]);
                };
            }else{
                $no2 = $parent+1;
                // $urut = $data1[$parent]->urut;
                // echo $no.'=>'.$data1[$parent]->urut.'<br>';
                Menu::where('menu_id', $data1[$parent]->menu_id)->update([
                    'parent_id' => null,
                    'urut' => $no2,
                    'child' => 1
                ]);
                // if(isset($data1[$parent]->children[0])){
                //     Menu::where('menu_id', $data1[$parent]->menu_id)->update([
                //         'child' => 1
                //     ]);
                // }else{
                //     Menu::where('menu_id', $data1[$parent]->menu_id)->update([
                //         'child' => null
                //     ]);
                // }
            }
        };
        return back();
    }
}
