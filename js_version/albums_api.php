<?php
    include __DIR__ . "/../php_version/database_logic.php";
    header("Content-Type: application/json");
    echo json_encode($database);
?>