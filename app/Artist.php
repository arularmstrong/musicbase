<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public function albums()

    {

        return $this->belongsToMany(Album::class, 'artists_albums');

    }

}
