<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable=['name'];

   public function districts(){
    return $this->hasMany(District::class);
   }
   public function schools(){
    return $this->hasMany(School::class);
   }
   public function students()
{
    return $this->hasMany(Student::class);
}}
