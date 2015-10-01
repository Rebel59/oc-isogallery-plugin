<?php

return [
    'plugin' => [
        'name' => 'Isotope Gallery',
        'description' => 'Display and manage isotope gallery'
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
            'name' => 'IsoGallery Component',
            'description' => 'Displays the Isotope filters and Gallery',
            'properties' => [
                'defaultLayout' => [
                    'title' => 'Default CSS',
                    'description' => 'IsoGallery uses a default layout (greenish) which injects CSS through the controller. If you don\'t want this, you can uncheck this option in the component settings.'
                ],
                'defaultJs' => [
                    'title' => 'Default JS',
                    'description' => 'IsoGallery filters galleries through a JS function that is injected through the controller. If you want to use your own function, you can uncheck this option in the component settings.'
                ],
                'stripSource' => [
                    'title' => 'Strip.js source',
                    'description' => 'IsoGallery uses strip.js for the lightbox functionality. If you already have strip implemented on your website, of if you want to use a different Lightbox plugin you can uncheck this option in the component settings.'
                ],
                'isotopeSource' => [
                    'title' => 'Isotope source',
                    'description' => 'IsoGallery filters and places the galleries with Isotope. If you already have Isotope implemented on your website, you can uncheck this option in the component settings.'
                ],
                'amount' => [
                    'title' => 'Amount of galleries',
                    'description' => 'Amount of galleries that should be loaded. 0 for unlimited.',
                    'validationMessage' => 'The Amount property can contain only numeric symbols'
                ]

            ]
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
