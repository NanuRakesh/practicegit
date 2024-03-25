<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
   public function students():BelongsToMany{
    return $this->belongsToMany(Student::class,'course_students','course_id','student_id');
   }
}
