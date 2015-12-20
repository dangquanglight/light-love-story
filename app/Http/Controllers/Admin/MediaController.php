<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

class MediaController extends AdminBaseController
{

    public function getImages()
    {
        $this->_setPageHeader(
            'Images List'
        );

        return view('admin.media.images_list');
    }

    public function postImages(Request $request)
    {

    }

}
