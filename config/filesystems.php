<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DISK', 'private'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been set up for each driver as an example of the required values.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'private' => [
            'driver' => 's3',
            'key' => env('S3_PRIVATE_ACCESS_KEY_ID'),
            'secret' => env('S3_PRIVATE_SECRET_ACCESS_KEY'),
            'region' => env('S3_PRIVATE_DEFAULT_REGION'),
            'bucket' => env('S3_PRIVATE_BUCKET'),
            'url' => env('S3_PRIVATE_URL'),
            'endpoint' => env('S3_PRIVATE_ENDPOINT'),
            'use_path_style_endpoint' => env('S3_PRIVATE_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

        'public' => [
            'driver' => 's3',
            'key' => env('S3_PUBLIC_ACCESS_KEY_ID'),
            'secret' => env('S3_PUBLIC_SECRET_ACCESS_KEY'),
            'region' => env('S3_PUBLIC_DEFAULT_REGION'),
            'bucket' => env('S3_PUBLIC_BUCKET'),
            'url' => env('S3_PUBLIC_URL'),
            'endpoint' => env('S3_PUBLIC_ENDPOINT'),
            'use_path_style_endpoint' => env('S3_PUBLIC_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
            'public' => true,
        ],

    ],

];
