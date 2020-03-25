<?php

require("Constants.php");

echo DSN;
try {
    $db = new PDO(DSN, DB_USER, DB_PASS);
} catch (PDOException $err) {
    echo "db problem: " . $err->getMessage();
}
