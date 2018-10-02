<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
	 function view(){
    	return view('songs.songs');
    }
}
