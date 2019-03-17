<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{

/*
* * This method retuns {json} with the artist details
* @param {json} request
* request object has request info.
*/
    public function listArtists(Request $request)
    {
        return response()->json(["data" => Artist::all()]);
    }

/*
* * This method retuns {json} with the albums associated with an artist
* @param {json} request
* request object has artistId, and request info.
*/
    public function listAlbumsUnderArtist(Request $request)
    {
        $artist = Artist::find($request->artistId);
        return response()->json(["data" => $artist->albums]);
    }
}
