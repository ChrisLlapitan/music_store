<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Album;


class AlbumController extends Controller
{
	function view(){
		$albums = Album::all();
		$artists = Artist::all();
		return view('albums.albums', compact('albums', 'artists'));
	}

	function create(Request $request){
		$albums = new Album;
		$albums->name = $request->name;
		$albums->year = $request->year;
		$albums->artist_id = $request->artist_id;
		$albums->save();
		return redirect('/albums');
	}

	function edit($id){
		$album = Album::find($id);
		$artists = Artist::all();
		return view('albums.edit_album', compact('album', 'artists'));
	}

	function update(Request $request, $id){
		$album = Album::find($id);
		$album->name = $request->name;
		$album->year = $request->year;
		$album->artist_id = $request->artist_id;
		$album->save();

		return redirect('/albums');	
	}

	function delete($id){
		$albums = Album::find($id);
		// dd($albums);
		$albums->delete();
		return redirect('/albums');
	}
}
