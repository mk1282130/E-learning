<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearnedWord extends Model
{
    protected $fillable = [
        'word_id', 'user_id',
    ];
}
