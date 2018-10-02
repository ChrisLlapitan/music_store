<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;

class ArtistController extends Controller
{   
    function view(){
    	$artists = Artist::all();
    	// dd($artists);
    	return view('artists.artists', compact('artists'));
    }

    function create(Request $request){
    	$artists = new Artist;
    	$artists->name = $request->name;
    	$artists->save();

    	return redirect('/artists');

    }

    function delete($id){
    	$artists = Artist::find($id);
		$artists->delete();
    	return redirect('/artists');
	}

    function edit($id){
        $artist = Artist::find($id);
        return view('artists.edit_artist', compact('artist'));  
    }

    function save(Request $request, $id){
        $artist = Artist::find($id);
        $artist->name = $request->name;
        $artist->save();

        return redirect('/artists');
    }
}

