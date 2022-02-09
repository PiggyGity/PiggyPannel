<?php

namespace App\Models;

use Libraries\DataLayer\DataLayer;

/**
 * Class User
 * @package App\Models
 */
class Visit extends DataLayer
{
    protected $connection;

    protected $error_connection;

    protected $fillable = [
        'date', 
        'count',
    ];

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("visit", $this->fillable, 'id', false);
    }

}
