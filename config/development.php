<?php

return [
    'app' => [
        'name' => 'LaraSame',
        'url' => 'http://127.0.0.1/',
        
        'hash' => [
            'algo' => PASSWORD_BCRYPT,
            'cost' => 10,
        ],
    ],

    'db' => [
        'host' => 'localhost',
        'database' => 'larasame',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
    ],
];