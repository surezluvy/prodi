<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $guarded = ['page_id'];
    
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}
