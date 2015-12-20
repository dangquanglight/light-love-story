<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaAlbum extends Model
{

    public function media()
    {
        return $this->hasMany('App/media');
    }

}
