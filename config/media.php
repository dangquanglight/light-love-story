<?php

    /**
     * Define constants relates to media and storage information
     */
    return [
        'image_storage_location' => public_path() . DIRECTORY_SEPARATOR . 'photos_storage',
        'video_storage_location' => public_path() . DIRECTORY_SEPARATOR . 'videos_storage',
        'types' => [
            'photos' => 1,
            'videos' => 2
        ]
    ];