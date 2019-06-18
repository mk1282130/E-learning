<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // protected $table = 'category';
    // モデルは自動的に複数形でデータベースネームを探そうとする
    // protectedを加えることで、ここでは単数形の名前で指定させている

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function words()
    {
        return $this->hasMany('App\Word');
    }
}
