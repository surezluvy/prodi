<?php

namespace App\Http\Livewire;

use Livewire\Component;
use View;
use App\Models\Category;
use App\Models\Setting;

class CategoryL extends Component
{
    public $no, $categories, $category_id, $name;
    public function mount()
    {
        $no = 1;
        $setting = Setting::first();
        $url = ucfirst(request()->segment(count(request()->segments())));
        View::share('url', $url);
        // View::share('no', $no);
        $this->no = $no;
        View::share('setting', $setting);
    }
    public function render()
    {
        $this->categories = Category::get();
        return view('admin.main.PostAndPage.Category.index')
        ->extends('admin.template')
        ->section('content');;
    }
    function addCategory(){
        Category::create([
            'name' => ucfirst($this->name),
        ]);
        $this->category_id = '';
        $this->name = '';
    }
    public function edit($ids)
    {
        $category = Category::where('category_id', $ids)->first();
        $this->category_id = $ids;
        $this->name = $category->name;
    }
    public function clear(){
        $this->category_id = '';
        $this->name = '';
    }
    function editCategory($id){
        // $validatedData = $this->validate();
        // dd($validatedData);
        // $this->name = ucfirst($validatedData['name']);
        // $validatedData['code'] = strtoupper($validatedData['code']);
        Category::where('category_id', $id)->update([
            'name' =>  ucfirst($this->name),
        ]);
    }
    function deleteCategory($id){
        Category::where('category_id', $id)->delete();
    }
}
