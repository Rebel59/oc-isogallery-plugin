<?php

return [
    'plugin' => [
        'name' => 'Isotope Gallery',
        'description' => 'Display and manage isotope galleri'
    ],
    'menu' => [
        'name' => 'Gallery',
        'sidemenu' => [
            'galleries' => 'Galleries',
            'categories' => 'Categories',
        ]
    ],
    'models' => [
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
        'gallery' => [
            'title' => 'Title',
            'photos' => 'Photos',
            'category' => 'Category',
            'url' => 'URL',
        ],
        'category' => [
            'title' => 'Title',
            'slug' => 'Slug',

        ],
    ],
    'components' => [
        'isoGallery' => [
            'name' => 'IsoGallery',
            'description' => 'Displays the Gallery'
        ],
    ],


];
