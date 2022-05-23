<?php

namespace App\Http\Livewire;

use Livewire\Component;
use View;
use App\Models\Lecturer;
use App\Models\Education;
use App\Models\Expertise;
use App\Models\Setting;


class Dosen extends Component
{
    public $no, $dosens, $name, $code, $nidn, $education, $expertise;
    protected $rules = [
        'name' => 'required|unique:lecturers',
        'code' => 'required|unique:lecturers',
        'nidn' => 'required|integer|unique:lecturers',
        'education' => 'required',
        'expertise' => 'required',
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
        $this->dosens = Lecturer::with('Expertise', 'Education')->get();
        return view('admin.main.Data.dosen.index')
            ->extends('admin.template')
            ->section('content');
    }
    function addDosen(){
        $validatedData = $this->validate();
        $validatedData['name'] = ucfirst($validatedData['name']);
        $validatedData['code'] = strtoupper($validatedData['code']);
        Lecturer::create($validatedData);
        $this->lecturer_id = '';
        $this->name = '';
        $this->code = '';
        $this->nidn = '';
        $this->education = '';
        $this->expertise = '';
    }
    public function edit($ids)
    {
        $lecturer = Lecturer::where('lecturer_id', $ids)->first();
        $this->lecturer_id = $ids;
        $this->name = $lecturer->name;
        $this->code = $lecturer->code;
        $this->nidn = $lecturer->nidn;
        $this->education = $lecturer->education;
        $this->expertise = $lecturer->expertise;
    }
    public function clear(){
        $this->lecturer_id = '';
        $this->name = '';
        $this->code = '';
        $this->nidn = '';
        $this->education = '';
        $this->expertise = '';
    }
    function editDosen($id){
        // $validatedData = $this->validate();
        // dd($validatedData);
        // $this->name = ucfirst($validatedData['name']);
        // $validatedData['code'] = strtoupper($validatedData['code']);
        Lecturer::where('lecturer_id', $id)->update([
            'name' =>  ucfirst($this->name),
            'code' => strtoupper($this->code),
            'nidn' => $this->nidn,
            'education' => $this->education,
            'expertise' => $this->expertise,
        ]);
    }
    function deleteDosen($id){
        Lecturer::where('lecturer_id', $id)->delete();
    }
}
