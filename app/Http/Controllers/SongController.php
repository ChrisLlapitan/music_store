<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Song;

class SongController extends Controller
{
	 function view(){
	 	$songs = Song::all();
	 	$albums = Album::all();
    	return view('songs.songlist', compact('songs', 'albums'));
    }

    function add($id){
    	$album = Album::find($id);
    	return view('songs.songs', compact('album'));
    }

   	function create(Request $request){
   		$song = new Song;
   		$song->title = $request->title;
   		$song->length = $request->length;
   		$song->genre = $request->genre;
   		$song->album_id = $request->album_id;
   		$song->save();

   		return redirect('/albums');
   	}

   	function delete($id){
   		$song = Song::find($id);
   		$song->delete();

   		return redirect('/songs');
   	}

   	function edit($id){
   		$song = Song::find($id);
   		$albums = Album::all();
   		return view('songs.edit_song', compact('song', 'albums'));
   	}


}
