<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumController extends Controller
{  

/*
* * This method retuns {json} with the album details
* @param {json} request
* request object has request info.
*/
    public function listAlbums(Request $request)
    {   
        return response()->json(["data"=>Album::all()]);
    }

/*
* * This method retuns {json} with the artist details associated under an album
* @param {json} request
* request object has albumId, and request info.
*/
    public function listArtistsUnderAlbum(Request $request)
    {   
        $album = Album::find($request->albumId);
        return response()->json(["data"=>$album->artists]);
    }

    
}
