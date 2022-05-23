<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['post_id'];

    public function menu(){
        return $this->belongsTo(Menu::class, 'menu_id', 'menu_id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}
