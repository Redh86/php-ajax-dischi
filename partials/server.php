<?php

require "database.php";

header("Content-type: application/json");

echo json_encode($database);

?>