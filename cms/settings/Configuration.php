<?php
/**
 * Configuration
 *
 * author: Marc Scherer
 * package: census CMS
 */

define('BASE_DIR', $baseDir);
define('CONFIG_DIR', __DIR__);
define('TEMPLATE_DIR', CONFIG_DIR . '/../templates/');

return [
    'pagetreeRoot' => 'page',
    'cms' => [
        'controllerAction' => [
            'authentication' => [
                'login'
            ],
            'dashboard' => [
                'overview'
            ],
            'pagetree',
            'plugin',
            'login',
            'file',
            'user'
        ]
    ],
    'session' => [
        'expires' => '3600*2'
    ]
];