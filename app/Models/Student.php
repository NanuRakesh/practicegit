<?php

namespace App\Models;

use App\Models\District;
use App\Models\PersonelDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    protected $fillable=['name','district_id','state_id','school_id'];
    public function school()
    {
        return $this->belongsTo(School::class);
    }
 
    public function personelDetail()
    {
        return $this->hasOne(PersonelDetail::class);
    }
    public function district(){
        return $this->belongsTo(District::class);
    }
    public function state(){
        return $this->belongsTo(State::class);
    }
    public function roles(){
        return $this->hasMany(Role::class);
    }
    public function courses():BelongsToMany{
        return $this->belongsToMany(Course::class,'course_students','student_id','course_id');
    }
}