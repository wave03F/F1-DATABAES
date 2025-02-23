<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "f1_database";

$mysqli = new mysqli($host, $user, $pass, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>

