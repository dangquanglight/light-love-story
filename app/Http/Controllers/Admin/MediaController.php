<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class MediaController extends AdminBaseController
{

    public function getImages()
    {
        $this->_setPageHeader(
            'Images List'
        );

        $this->_setBreadCrumb([
            [
                'name' => 'Images list',
                'url' => ''
            ]
        ]);

        return view('admin.media.images_list');
    }

    public function postImages(Request $request)
    {
        dd($request->all());
    }

    public function postDeleteSingleImage(Request $request)
    {dd($request->all());
        $file_name = $request->get('file_name');

        if(!$file_name)
        {
            return 0;
        }

        $image_storage_directory = Config::get('media.image_storage_location');

        $sessionImage = Image::where('original_name', 'like', $file_name)->first();

        if(empty($sessionImage))
        {
            return Response::json([
                'error' => true,
                'code'  => 400
            ], 400);
        }

        $full_path1 = $full_size_dir . $sessionImage->filename . '.jpg';
        $full_path2 = $icon_size_dir . $sessionImage->filename . '.jpg';

        if ( File::exists( $full_path1 ) )
        {
            File::delete( $full_path1 );
        }

        if( !empty($sessionImage))
        {
            $sessionImage->delete();
        }

        return Response::json([
            'error' => false,
            'code'  => 200
        ], 200);
    }

}
