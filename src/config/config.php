<?php

return [
    'version'       => '1.1.7',
    'defaultRole'   => 'admin',
    'defaultRole'   => 'admin',
    'phpDateFormat' => 'd-m-Y',
    'jsDateFormat'  => 'DD-MM-YYYY',
    'paths'         => [
        'files'   => 'files',
        'avatars' => 'avatars',
        'imports' => 'imports',
        'temp'    => 'temp',
        'exports' => 'exports',
    ],
    'ravenKey' => env('RAVEN_DSN', 'no-raven-key-found'),
    'cacheLifetime' => env('CACHE_LIFETIME', 60),
];
