<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model 
{
  protected $table = 'options';
  protected $fillable = [
    'name'
  ];

  public function questions()
  {
      return $this->belongsToMany(Question::class,'questions_options');
  }
}