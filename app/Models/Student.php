<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model 
{
  protected $table = 'students';
  
  protected $fillable = [
    'name', 'genere', 'group_id'
  ];

  public function questions() {
    return $this->belongsToMany(Question::class, 'answers', 'student_id', 'question_id')->withPivot(['option_id']);;
  }
  public function options() {
    return $this->belongsToMany(Option::class, 'answers', 'student_id', 'option_id')->withPivot(['question_id']);
  }
}