<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model 
{
    protected $table = 'questions';

    protected $fillable = [
        'number', 'name', 'questionnaires_id'
    ];

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class, 'id');
    }

    public function options()
    {
        return $this->belongsToMany(Option::class,'questions_options');
    }
}
