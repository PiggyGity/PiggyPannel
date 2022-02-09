<?php

namespace App\Models;

use Libraries\DataLayer\DataLayer;

/**
 * Class User
 * @package App\Models
 */
class Invoice extends DataLayer
{
    protected $connection;

    protected $error_connection;

    protected $fillable = [
        'pid',
        'uid',
    ];

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("invoice", $this->fillable);
    }

}
