<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Viewable;
//use Illuminate\Support\Facades\Artisan;

class Forum extends Model
{
  use Viewable;

  public function tags()
  {
    return $this->belongsToMany('App\Tag');
  }
//  public function clearCache()
//  {
//
//      return back();
//  }
  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function comments()
  {
    return $this->morphMany('App\Comment', 'commentable');
  }
}
