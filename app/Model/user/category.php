<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function posts () {
      return $this->belongstoMany('App\Model\user\post', 'category_posts');
    }
}
