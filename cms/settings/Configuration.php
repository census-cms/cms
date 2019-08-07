<?php
/**
 * Configuration
 *
 * author: Marc Scherer
 * package: census CMS
 */

define('BASE_DIR', $baseDir . DIRECTORY_SEPARATOR);
define('CONFIG_DIR', __DIR__ . DIRECTORY_SEPARATOR);
define('STORAGE_DIR', realpath($baseDir . 'storage') . DIRECTORY_SEPARATOR);
define('PLUGIN_DIR', realpath(STORAGE_DIR . 'plugins') . DIRECTORY_SEPARATOR);
define('TEMPLATE_DIR', realpath(CONFIG_DIR . '../templates') . DIRECTORY_SEPARATOR);
define('ASSETS_DIR', realpath(CONFIG_DIR . '../assets') . DIRECTORY_SEPARATOR);

return [
    'pagetreeRoot' => 'page',
    'cms' => [
        'controllerAction' => [
            'authentication' => [
                'login',
				'logout'
            ],
            'backend' => [
                'dashboard'
            ],
            'pagetree',
            'plugin',
            'login',
            'file',
            'user'
        ]
    ],
	'view' => [
		'templatePaths' => [
			TEMPLATE_DIR
		]
	],
    'session' => [
        'expires' => '3600*2'
    ]
];