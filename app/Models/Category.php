<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // protected $table = ['categories'];
    protected $guarded = ['category_id'];
    public function post(){
        return $this->belongsTo(Post::class, 'category_id', 'category_id');
    }
}
