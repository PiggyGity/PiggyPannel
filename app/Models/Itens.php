<?php

namespace App\Models;

use Libraries\DataLayer\Connect;
use Libraries\DataLayer\DataLayer;

/**
 * Class User
 * @package App\Models
 */
class Itens extends DataLayer
{
    protected $connection;

    protected $error_connection;

    protected $fillable = [];

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("Db_Tank.dbo.Shop_Goods", $this->fillable, 'TemplateID', false);

        $this->connection = Connect::getInstance();
        $this->error_connection = Connect::getError();
    }
}
