<?php

return [
    'home' => 'home',
    'languages' => true,
    'date'  => [
        'handler' => 'intl',
    ],
    'locale' => 'fr_CA',
    'cache' => [
        'pages' => [
            'active' => false,
        ]
    ],
    'debug'  => true,
    'email' => [
        'transport' => [
            'type' => 'smtp',
            'host' => 'smtp.company.com',
            'port' => 465,
            'security' => true,
        ]
    ],
    'auth' => [
        'methods' => ['password', 'password-reset']
    ],
    'panel' => [
        'slug' => 'panel',
        'language' => 'en',
        'css' => 'assets/css/panel.css',
        'js' => 'assets/js/panel.js',
        'favicon' => 'assets/panel.ico',
    ],
    'thumbs' => [
        'srcsets' => [
            'default' => [
                '300w'  => ['width' => 300],
                '600w'  => ['width' => 600],
                '900w'  => ['width' => 900],
                '1200w' => ['width' => 1200],
                '1800w' => ['width' => 1800],
                '1920w' => ['width' => 1920]
            ],
            'webp' => [
                '300w'  => ['width' => 300, 'format' => 'webp'],
                '600w'  => ['width' => 600, 'format' => 'webp'],
                '900w'  => ['width' => 900, 'format' => 'webp'],
                '1200w' => ['width' => 1200, 'format' => 'webp'],
                '1800w' => ['width' => 1800, 'format' => 'webp'],
                '1920w' => ['width' => 1920, 'format' => 'webp']
            ],
        ]
    ],
    'routes' => [
        [
            'pattern' => 'sitemap.xml',
            'language' => '*',
            'action' => function () {
                $pages = site()->pages()->index();
                $ignore = kirby()->option('sitemap.ignore', ['error']);
                $content = snippet('sitemap', compact('pages', 'ignore'), true);
                return new Kirby\Cms\Response($content, 'application/xml');
            }            
        ]
    ],
];