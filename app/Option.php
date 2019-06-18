<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public function option()
    {
        return $this->belongsTo('App\Word');
    }

    public function answer()
    {
        return $this->hasOne('App\Answer');
    }
    
    public function optionGetWord()
    {
        return $this->belongsTo('App\Word','word_id','id');
    }
}
