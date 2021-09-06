<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model 
{
  protected $table = 'questionnaires';

  protected $fillable = [
    'name'
  ];

  public function questions() 
  {
    return $this->hasMany(Question::class, 'questionnaires_id', 'id');
  }

}