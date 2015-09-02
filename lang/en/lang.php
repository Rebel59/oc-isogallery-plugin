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
            'fieldName' => 'Gallery',
            'title' => 'Title',
            'photos' => 'Photos',
            'category' => 'Category',
            'url' => 'www.mywebsite.com',
            'categories_section' => 'Categories',
            'title_section' => 'Title & URL',
            'photos_section' => 'Photos',

        ],
        'category' => [
            'fieldName' => 'Category',
            'title' => 'Title',
            'slug' => 'Slug',
            'title_section' => 'Title & Slug',
        ],
    ],
    'components' => [
        'isoGallery' => [
            'name' => 'IsoGallery',
            'description' => 'Displays the Gallery'
        ],
    ],
    'actions' => [
        'manage_galleries' => 'Manage Galleries',
        'create_gallery' => 'Create Gallery',
        'edit_gallery' => 'Edit Gallery',
        'preview_gallery' => 'Preview Gallery',
    ],
    'controllers' => [
        'galleries' => [
            'modelName' => 'Gallery'
        ]
    ]


];
