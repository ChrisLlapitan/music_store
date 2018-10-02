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
        $artists->image = 'storage/images/user.png';
        $artists->save();

        if($request->hasFile('image')) {
            $extension = $request->image->getClientOriginalExtension();
            $request->image->storeAs('public/images/artist/', "$artists->id.$extension");
            $artists->image = "storage/images/artist/$artists->id.$extension";
            $artists->save();
        }


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
    if($request->hasFile('image')) {
        $extension = $request->image->getClientOriginalExtension();
        $request->image->storeAs('public/images/artist/', "$artist->id.$extension");
        $artist->image = "storage/images/artist/$artist->id.$extension";
    }
    $artist->save();

    return redirect('/artists');
}
}

