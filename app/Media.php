<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{

    public function mediaAlbum()
    {
        return $this->belongsTo('App/MediaAlbum');
    }

}
