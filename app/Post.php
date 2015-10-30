<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
  //
  protected $fillable = [
      'user_id',
      'category_id',
      'title',
      'content',
      'slug',
      'published_at',
      'status'
  ];

  public function user() {
    return $this->belongsTo('App\User');
  }

  public function category() {
    return $this->belongsTo('App\Category');
  }

  public function comments() {
    return $this->hasMany('App\Comments');
  }

  public function tags() {
    return $this->belongsToMany('App\Tags');
  }

  public function media() {
    return $this->belongsTo('App\Media');
  }

  /* Scope */

  public function scopeTest($query)
  {
//    return $query->paginate(10)->where('published_at', '<', Carbon::now());
  }
}
