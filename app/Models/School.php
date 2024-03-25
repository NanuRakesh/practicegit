<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model
{
    protected $fillable=['name','district_id','state_id'];
    public function students():HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function district(){
        return $this->belongsTo(District::class);
    }
    public function state(){
        return $this->belongsTo(State::class);
    }
    public function schools(){
        return $this->hasMany(School::class);
    }
}
