<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    protected $fillable=['name','student_id'];
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
