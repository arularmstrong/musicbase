<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
   public function record(){
    return $this->belongsTo(Record::class);
   }

   public function artists()

    {

        return $this->belongsToMany(Artist::class, 'artists_albums');

    }
}
