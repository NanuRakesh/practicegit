<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonelDetail extends Model
{
    protected $fillable=['aadhar_no','pan_no','student_id'];
    
   public function student(){
    return $this->belongsTo(Student::class);
   }
}
