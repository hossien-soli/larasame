<?php

return [
    'app' => [
        'name' => 'LaraSame',
        'url' => 'http://<your-domain>',
        
        'hash' => [
            'algo' => PASSWORD_BCRYPT,
            'cost' => 10,
        ],
    ],

    'db' => [
        'host' => 'localhost',
        'database' => '<your-db-name>',
        'username' => '<your-db-user-username>',
        'password' => '<your-db-user-password>',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
    ],
];