<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = ['title'];
    public function albums()

    {

        return $this->hasMany(Album::class);

    }
}
