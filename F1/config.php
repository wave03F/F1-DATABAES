<?php
$host = "localhost";
$user = "root"; // แก้เป็น user ของ MySQL ถ้าใช้ hosting จริง
$password = ""; // ใส่รหัสผ่านของ MySQL
$database = "f1_database";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>