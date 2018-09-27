<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function categories()
    {
      return $this->belongsToMany('App\Category');
    }

    public function scopeMightAlsoLike($query)
    {
      return $query->inRandomOrder()->take(4);
    }
}
