<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
      function artist() {
    	return $this->belongsTo('App\Artist');
    }

    function songs() {
    	return $this->hasMany('App\Song');
    }

}
