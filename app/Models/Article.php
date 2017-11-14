<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $table = 'articles';

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }

}
