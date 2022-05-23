<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;
    protected $guarded = ['lecturer_id'];
    protected $primaryKey = 'lecturer_id';

    public function Expertise(){
        return $this->hasMany(Expertise::class, 'lecturer_id', 'lecturer_id');
    }
    public function Education(){
        return $this->hasMany(Education::class, 'lecturer_id', 'lecturer_id');
    }
}
