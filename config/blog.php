<?php

return [
    'uploadPath' => public_path('/uploads'),
    'defaultUploadSection' => 'files',
    'imageUploadSection' => 'images',
    'docsUploadSection' => 'docs',
    'imageDefaultPath' => storage_path() . '/default.jpg',
    'storagePermissions' => 0755,
    'imageCacheTime' => 86400,
];