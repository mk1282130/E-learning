<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'lesson_id', 'option_id',
    ];

    public function answerGetOption()
    {
        return $this->belongsTo('App\Option','option_id','id');
    }
}
