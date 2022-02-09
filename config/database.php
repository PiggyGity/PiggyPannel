<?php
 
return [
    'default' => 'sqlsrv',
    'connections' => [
        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => '',
            'host' => 'DESKTOP-JEK5DFK',
            'port' => '',
            'database' => 'Db_Membership',
            'username' => 'sa',
            'password' => 'sa',
            'charset' => 'utf8', 
            'prefix' => '',
            'prefix_indexes' => true,
            'use_port' => false,
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_CASE => PDO::CASE_NATURAL
            ],
        ],
    ],
];
