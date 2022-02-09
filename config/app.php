<?php
return [

    'url' => 'http://' . $_SERVER['HTTP_HOST'],

    'debug' => true,

    'timezone' => 'UTC',

    'locale' => 'pt_br',

    'sign' => '043e249c2901c659a9952e3206cae0b',

    'domain' => $_SERVER['HTTP_HOST'],

	'resource'=> $_ENV['ResourceLink'],

    'flash'  => $_ENV['FlashLink'],

    'Name' => $_ENV['ProjectName'],

    'Request'=> $_ENV['RequestLink']
];
