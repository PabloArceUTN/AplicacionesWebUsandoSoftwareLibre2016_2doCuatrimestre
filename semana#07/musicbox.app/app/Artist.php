<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /** Frist relation
      * Get songs by Artist
    **/

    public function tracks()
    {
      return $this->hasMany('App\Track');
    }

    /** Frist relation
      * Get Albums by Artist
    **/

    public function albums()
    {
      return $this->hasMany('App\Album');
    }
}
