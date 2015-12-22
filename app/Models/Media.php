<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Support\Facades\Response;
    use Illuminate\Support\Facades\File;
    use Intervention\Image\ImageManager;

    class Media extends Model
    {

        public static $rules = [
            'file' => 'required|mimes:png,gif,jpeg,jpg,bmp'
        ];

        public static $messages = [
            'file.mimes'    => 'Uploaded file format does not support',
            'file.required' => 'File is required'
        ];

        public function mediaAlbum()
        {
            return $this->belongsTo('App/Models/MediaAlbum');
        }

        public function uploadImages($form_data)
        {
            $validator = Validator::make($form_data, Image::$rules, Image::$messages);

            if ($validator->fails())
            {
                return Response::json([
                    'error'   => true,
                    'message' => $validator->messages()->first(),
                    'code'    => 400
                ], 400);
            }

            $photo = $form_data['file'];
            $originalName = $photo->getClientOriginalName();

            $originalNameWithoutExt = substr($originalName, 0, strlen($originalName) - 4);
            $filename = $this->__sanitize($originalNameWithoutExt);
            $allowed_filename = $this->__createUniqueFilename($filename);
            $filenameExt = $allowed_filename . '.jpg';
            $uploadSuccess1 = $this->original($photo, $filenameExt);
            $uploadSuccess2 = $this->icon($photo, $filenameExt);

            if (!$uploadSuccess1 || !$uploadSuccess2)
            {
                return Response::json([
                    'error'   => true,
                    'message' => 'Server error while uploading',
                    'code'    => 500
                ], 500);
            }

            $sessionImage = new Image;
            $sessionImage->filename = $allowed_filename;
            $sessionImage->original_name = $originalName;
            $sessionImage->save();

            $this->create([
                'media_type' => config('media.types.photos'),
                'media_album_id' => config('media.types.photos'),
                'name' => config('media.types.photos'),
                'description' => config('media.types.photos'),
                'file_name' => config('media.types.photos')
            ]);

            return Response::json([
                'error' => false,
                'code'  => 200
            ], 200);
        }

        private function __sanitize($string, $force_lowercase = true, $anal = false)
        {
            $strip = array(
                "~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]",
                "}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",
                "â€”", "â€“", ",", "<", ".", ">", "/", "?"
            );

            $clean = trim(str_replace($strip, "", strip_tags($string)));
            $clean = preg_replace('/\s+/', "-", $clean);
            $clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean;

            return ($force_lowercase) ?
                (function_exists('mb_strtolower')) ?
                    mb_strtolower($clean, 'UTF-8') :
                    strtolower($clean) :
                $clean;
        }

        private function __createUniqueFilename($file_name)
        {
            $image_directory = Config::get('media.image_storage_location');
            $full_image_path = $image_directory . $file_name;

            if (File::exists($full_image_path))
            {
                // Generate token for image
                $imageToken = substr(sha1(mt_rand()), 0, 5);
                return $file_name . '-' . $imageToken;
            }

            return $file_name;
        }

        /**
         * Optimize Original Image
         */
        public function original($photo, $filename)
        {
            $manager = new ImageManager();
            $image = $manager->make($photo)->encode('jpg')->save(Config::get('images.full_size') . $filename);
            return $image;
        }

        /**
         * Create Icon From Original
         */
        public function icon($photo, $filename)
        {
            $manager = new ImageManager();
            $image = $manager->make($photo)->encode('jpg')->resize(200, null, function ($constraint)
            {
                $constraint->aspectRatio();
            })->save(Config::get('images.icon_size') . $filename);
            return $image;
        }

    }
