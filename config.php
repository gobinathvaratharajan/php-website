<?php

return [
    'database' => [
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'myapp',
        'charset' => 'utf8mb4'
    ],

    // services for token & keys
    'services' => [
        'prerender'=> [
            'token' => '',
            'secret' => ''
        ]
    ]
];
