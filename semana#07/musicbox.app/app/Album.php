<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  /** Frist relation
    * Set Artist to Track
  **/

  public function artist()
  {
    return $this->belongsTo('App\Artist');
  }

  /*
    * Pivot function: Get traks by many albums
  */
  public function tracks()
  {
    return $this->belongsToMany('App\Track')
    ->withPivot('number')->withTimestamps();
  }
}
