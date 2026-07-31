<?php

return [
    'slug' => 'plimplim',
    'name' => 'Payaso Plimplim',
    'description' => 'Tema colorido inspirado en una fiesta infantil..',
    'version' => '1.0.0',
    'author' => 'ViteoFly',
    'category' => 'birthday',
    'tags' => ['party', 'kids', 'fun', 'colorful'],
    'preview' => 'preview.webp',
    'assets' => [
        'resources/themes/plimplim/styles.css',
        'resources/themes/plimplim/functions.js'
    ],
    'sections' => [
        'hero' => 'hero',
        'countdown' => 'countdown',
        'location' => 'location',
        'rsvp' => 'rsvp',
        'footer' => 'footer',
    ],
    'footer_form'=> [
        'name'=>'text',
        'attendees'=>'int',
        'message'=>'text'
    ]
];