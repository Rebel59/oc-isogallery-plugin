<?php

return [
    'plugin' => [
        'name' => 'Isotope Gallery',
        'description' => 'Beheer en tonen van een Isotope gallerij'
    ],
    'menu' => [
        'name' => 'Gallerij',
        'sidemenu' => [
            'galleries' => 'Gallerijen',
            'categories' => 'Categoriën',
        ]
    ],
    'models' => [
        'created_at' => 'Gemaakt op',
        'updated_at' => 'Geupdate op',
        'gallery' => [
            'fieldName' => 'Gallerij',
            'title' => 'Titel',
            'photos' => 'Foto\'s',
            'category' => 'Categorie',
            'url' => 'www.mijnwebsite.nl',
            'categories_section' => 'Categoriën',
            'title_section' => 'Titel & URL',
            'photos_section' => 'Foto\'s',

        ],
        'category' => [
            'fieldName' => 'Categorie',
            'title' => 'Titel',
            'slug' => 'Slug',
            'title_section' => 'Titel & Slug',
        ],
    ],
    'components' => [
        'isoGallery' => [
            'name' => 'IsoGallery Component',
            'description' => 'Toont de Isotope filters en Gallerij',
            'properties' => [
                'defaultLayout' => [
                    'title' => 'Standaard CSS',
                    'description' => 'IsoGallery gebruikt een standaard layout, waar CSS wordt geinjecteerd in de controller. Als je dit niet wilt, kan je deze optie uitvinken.'
                ],
                'defaultJs' => [
                    'title' => 'Default JS',
                    'description' => 'IsoGallery filtert gallerijen door middel van een JS functie die wordt geinjecteerd in de controller. Als je een eigen functie wilt gebruiken, kan je deze optie uitvinken.'
                ],
                'stripSource' => [
                    'title' => 'Strip.js source',
                    'description' => 'IsoGallery gebruikt strip.js voor de lightbox functionaliteit. Als strip.js al geladen is, of je een andere lightbox wilt gebruiken kan je deze optie uitvinken.'
                ],
                'isotopeSource' => [
                    'title' => 'Isotope source',
                    'description' => 'IsoGallery filtert en plaatst de gallerijen met Isotope. Als je Isotope al hebt ingeladen, kan je deze optie uitvinken.'
                ],
                'amount' => [
                    'title' => 'Aantal gallerijen',
                    'description' => 'Het aantal gallerijen wat ingeladen moet worden. Voer 0 in voor onbeperkt.',
                    'validationMessage' => 'Het aantal mag alleen uit cijfers bestaan.'
                ]

            ]
        ],
    ],
    'actions' => [
        'manage_galleries' => 'Beheer Gallerijen',
        'create_gallery' => 'Maak Gallerij',
        'edit_gallery' => 'Pas Gallerij aan',
        'preview_gallery' => 'Toon voorbeeld van Gallerij',
    ],
    'controllers' => [
        'galleries' => [
            'modelName' => 'Gallerij'
        ]
    ],
    'permissions' => [
        'access_galleries' => 'Beheer de gallerijen'
    ]


];
