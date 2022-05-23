<?php

namespace App\Http\Livewire;

use Livewire\Component;
use View;
use Livewire\WithFileUploads;
use App\Models\Gallery;
use App\Models\Setting;

class GalleryL extends Component
{
    use WithFileUploads;
    public $galleries, $name, $image;

    protected $rules = [
        'name' => 'required',
        'image' => 'image',
    ];

    public function mount()
    {
        $no = 1;
        $setting = Setting::first();
        $url = ucfirst(request()->segment(count(request()->segments())));
        View::share('url', $url);
        View::share('setting', $setting);
        // View::share('no', $no);
        $this->no = $no;
    }
    public function render()
    {
        $this->galleries = Gallery::get();
        return view('admin.main.Data.gallery.index')
        ->extends('admin.template')
        ->section('content');
    }
    public function addGallery()
    {
        $this->validate();

        $image_path = $this->image->store('public/gallery');
        $image = str_replace("public/gallery/", "", $image_path);
        Gallery::create([
            'name' => $this->name,
            'image' => $image
        ]);
    }
    function deleteGallery($id){
        Gallery::where('gallery_id', $id)->delete();
    }
}
