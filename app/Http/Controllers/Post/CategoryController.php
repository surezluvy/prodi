<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $url = ucfirst(request()->segment(count(request()->segments())));
        View::share('url', $url);
    }
    
    function index(){
        $menus = Category::where('parent_id', null)->orderBy('urut', 'ASC')->get();
        
        return view('admin.main.post.category', compact('menus'));
    }
    function sortCategory(Request $request){
        $data1 = json_decode($request->test);
        for ($parent = 0; $parent < count($data1); $parent++) {
            if(isset($data1[$parent]->children)){
                $no = $parent+1;
                // $urut = $data1[$parent]->urut;
                // echo $no.'=>'.$data1[$parent]->urut.'<br>';
                Category::where('category_id', $data1[$parent]->category_id)->update([
                    'urut' => $no,
                ]);
                for ($child = 0; $child < count($data1[$parent]->children); $child++) {
                    $no1 = $child+1;
                    $urut = $data1[$parent]->urut.'.'.$no1;
                    // echo $no1.'=>'.$data1[$parent]->urut.'=='.$urut.'<br>' ;
                    Category::where('category_id', $data1[$parent]->children[$child]->category_id)->update([
                        'parent_id' => $data1[$parent]->category_id,
                        'urut' => $urut,
                    ]);
                    // echo 'child<br>';
                    // Category::where('category_id', $data1[$parent]->children[$child]->category_id)->update([
                    //     'parent_id' => $data1[$parent]->category_id,
                    // ]);
                };
            }else{
                $no2 = $parent+1;
                // $urut = $data1[$parent]->urut;
                // echo $no.'=>'.$data1[$parent]->urut.'<br>';
                Category::where('category_id', $data1[$parent]->category_id)->update([
                    'parent_id' => null,
                    'urut' => $no2,
                ]);
            }
        };
        return back();
    }
    function addCategory(Request $request){
        $latest = Category::orderBy('urut', 'DESC')->first();
        if(isset($latest)){
            $last = $latest->urut+1;
        }else{
            $last = 1;
        }
        
        if(isset($request->link)){
            Category::create([
                'name' => ucfirst($request->name),
                'link' => $request->link,
                'urut' => $last
            ]);
        }else{
            Category::create([
                'name' => ucfirst($request->name),
                'urut' => $last
            ]);
        }

        return back();
    }
    function deleteCategory($id){
        Category::where('category_id', $id)->delete();
        return back();
    }
    function editCategory(Request $request, $id){
        if(isset($request->link)){
            Category::where('category_id', $id)->update([
                'name' => ucfirst($request->name),
                'link' => $request->link,
            ]);
        }else{
            Category::where('category_id', $id)->update([
                'name' => ucfirst($request->name),
            ]);
        }
        return back();
    }
}
