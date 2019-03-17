<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;
use App\Album;
use App\Artist;

class RecordController extends Controller
{
/*
* * This method retuns {json} with the record details
* @param {json} request
* request object has  request info.
*/
    public function listRecords(Request $request)
    {   
        return response()->json(["data"=>Record::all()]);
    }

/*
* * This method retuns {json} with the albums associated with a record
* @param {json} request
* request object has recordId, and request info.
*/
    public function listAlbumsUnderRecord(Request $request)
    {   
        $record = Record::find($request->recordId);
        return response()->json(["data"=>$record->albums]);
    }

/*
* * This method retuns {json} with the artists associated with a record
* @param {json} request
* request object has recordId, and request info.
*/
    public function listArtistsUnderRecord(Request $request)
    {   
        
        $record = Record::find($request->recordId);
      
       $album_ids = $record->albums->map(function($album) {
        return $album['id'];
      });

      $artists = Artist::whereHas('albums', function($q) use($album_ids) {
        $q->whereIn('album_id', $album_ids)
          ->groupBy('artist_id');
    })->get();
    
      return response()->json(["data"=>$artists]);
    
}
}
