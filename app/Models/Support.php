<?php

namespace App\Models;

use Libraries\DataLayer\DataLayer;

/**
 * Class User
 * @package App\Models
 */
class Support extends DataLayer
{
    protected $connection;

    protected $error_connection;

    protected $fillable = [
        'sendID',
        'receiveID',
        'content',
    ];

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("support", $this->fillable);
    }

}
