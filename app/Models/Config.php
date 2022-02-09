<?php

namespace App\Models;

use Libraries\DataLayer\Connect;
use Libraries\DataLayer\DataLayer;

/**
 * Class User
 * @package App\Models
 */
class Config extends DataLayer
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
        parent::__construct("web_config", $this->fillable);

        $this->connection = Connect::getInstance();
        $this->error_connection = Connect::getError();
    }

    public function MultipleUpdate(array $data)
    {
        foreach ($data as $key => $value) {
            $sql = "UPDATE web_config set value_c = ? WHERE key_c = ? ";
            if (!$this->connection->prepare($sql)->execute([$value, $key])) {
                echo $this->error_connection;
                return;
            }
        }
        return true;
    }
}
