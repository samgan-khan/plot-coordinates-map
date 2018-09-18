<?php

include ('../config/debug.php');
include ('../model/execute.php');

use model\Execute;

$query = new Execute();

echo json_encode(
    $query->getAllCoordinates(),
    JSON_NUMERIC_CHECK
);