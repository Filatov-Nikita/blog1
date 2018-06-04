<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $table = 'articles';
    protected $fillable = ['title', 'description', 'content'];
    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }
	public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
}
