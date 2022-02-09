<?php
 
return [
    'default' => 'sqlsrv',
    'connections' => [
        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => '',
            'host' => $_ENV['Db_Host'],
            'port' => $_ENV['Db_Port'],
            'database' => $_ENV['Membership'],
            'username' => $_ENV['Db_User'],
            'password' => $_ENV['DB_Password'],
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
