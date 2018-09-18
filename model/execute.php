<?php
namespace model;

include ('../config/connection.php');

use config\Connection;

/**
 * Class Execute
 * @package model
 */
class Execute
{
    /**
     * @var Connection
     */
    private $db;

    function __construct()
    {
        $connection = new Connection();
        $this->db = $connection->getConnected();
    }

    public function getAllCoordinates()
    {
        $result = mysqli_query(
            $this->db,
            "SELECT lat, lng FROM locations;"
        );

        if ($result) {
            $result = $this->formatter($result);
        } else {
            printf("error: %s\n", mysqli_error($this->db));
        }

        return $result;
    }

    private function formatter($result)
    {
        $formattedData = [];
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $formattedData[$count] = $row;
            $count++;
        }
        mysqli_free_result($result);

        return $formattedData;
    }
}