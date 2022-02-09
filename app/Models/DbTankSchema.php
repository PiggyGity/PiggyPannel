<?php

namespace App\Models;

use Libraries\DataLayer\Connect;
use Libraries\DataLayer\DataLayer;

/**
 * Class User
 * @package App\Models
 */
class DbTankSchema extends DataLayer
{
    protected $connection;

    protected $error_connection;

    protected $fillable = [
        'key',
        'value',
    ];

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("{$_ENV["Game_User"]}.INFORMATION_SCHEMA.TABLES", $this->fillable);

        $this->connection = Connect::getInstance();
        $this->error_connection = Connect::getError();
    }

}
