<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
      function view(){
    	return view('albums.albums');
    }
}
