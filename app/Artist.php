<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
       function albums() {
    	return $this->hasMany('App\Album');
    }

}
