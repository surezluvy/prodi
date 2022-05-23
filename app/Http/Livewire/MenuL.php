<?php

namespace App\Http\Livewire;

use Livewire\Component;
use View;
use App\Models\Menu;
use App\Models\Setting;

class MenuL extends Component
{
    public $menus, $name, $link, $menu_id;
    protected $rules = [
        'name' => 'required',
    ];

    public function mount()
    {
        $setting = Setting::first();
        $url = ucfirst(request()->segment(count(request()->segments())));
        View::share('url', $url);
        View::share('setting', $setting);
    }

    public function render()
    {
        $this->menus = Menu::where('parent_id', null)->orderBy('urut', 'ASC')->get();
        return view('admin.main.PostAndPage.Menu.index')
            ->extends('admin.template')
            ->section('content');
    }
    public function addCategory(){
        $this->validate();

        $latest = Menu::orderBy('urut', 'DESC')->first();
        if(isset($latest)){
            $last = $latest->urut+1;
        }else{
            $last = 1;
        }

        if(isset($this->link)){
            Menu::create([
                'name' => ucfirst($this->name),
                'link' => $this->link,
                'urut' => $last,
                'child' => 1,
            ]);
        }else{
            Menu::create([
                'name' => ucfirst($this->name),
                'urut' => $last,
                'child' => 1,
            ]);
        }
    }
    public function deleteCategory($ids){
        Menu::where('menu_id', $ids)->delete();
    }
    public function edit($ids)
    {
        $category = Menu::where('menu_id', $ids)->first();
        $this->menu_id = $ids;
        $this->name = $category->name;
        $this->link = $category->link;
    }
    public function editCategory(){
        $this->validate();

        if(isset($this->link)){
            Menu::where('menu_id', $this->menu_id)->update([
                'name' => ucfirst($this->name),
                'link' => $this->link,
            ]);
        }else{
            Menu::where('menu_id', $this->menu_id)->update([
                'name' => ucfirst($this->name),
            ]);
        }
    }
}
