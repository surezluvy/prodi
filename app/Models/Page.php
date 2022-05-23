<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $guarded = ['page_id'];

    public function menu(){
        return $this->belongsTo(Menu::class, 'menu_id', 'menu_id');
    }
}
