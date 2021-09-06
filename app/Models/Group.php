<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model 
{
  protected $table = 'groups';
  protected $fillable = [
    'name', 'group_id'
  ];

  public function tutor() {
    return $this->belongsTo(User::class);
  }
  public function students() {
    return $this->hasMany(Student::class);
  }
}