<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    /** Frist relation
      * Set Artist to Track
    **/

    public function artist()
    {
      return $this->belongsTo('App\Artist');
    }
    /*
      * Pivot function: Get Albums by many tracks
    */
    public function albums()
    {
      return $this->belongsToMany('App\Album')
      ->withPivot('number')->withTimestamps();
    }
}
