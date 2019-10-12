<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use LikeTrait;

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function comments()
    {
      return $this->morphMany('App\Comment', 'commentable');
    }
}