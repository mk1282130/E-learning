<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function options()
    {
        return $this->hasMany('App\Option');
    }

    public function wordGetOption()
    {
        return $this->hasMany('App\Option','word_id','id');
    }
}
