<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'php_dev');
define('DB_PASS', 'hadeed123');
define('DB_USER', 'Hadeed');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die('connection failed' . $conn->connect_error);
}
