<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    // protected $table = ['categories'];
    protected $guarded = ['menu_id'];
    protected $primaryKey = 'menu_id';
    public function post(){
        return $this->belongsTo(Post::class, 'menu_id', 'menu_id');
    }
}
