<?php
namespace config;

use mysqli;

/**
 * Class Connection
 * @package config
 */
class Connection
{
    /**
     * @var string
     */
    private $host = 'localhost';

    /**
     * @var string
     */
    private  $username = 'root';

    /**
     * @var string
     */
    private $password = 'root';

    /**
     * @var string
     */
    private $dbName = 'coordinates';

    /**
     * @return mysqli
     */
    public function getConnected()
    {
        // Create connection
        $conn = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->dbName
        );

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}
