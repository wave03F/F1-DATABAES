<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$host = "localhost";
$user = "root"; // ถ้าใช้ XAMPP user คือ root
$pass = ""; // ถ้าใช้ XAMPP ปกติรหัสผ่านเป็นค่าว่าง
$db = "f1_database"; // ชื่อฐานข้อมูลที่คุณสร้างใน phpMyAdmin

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Connection failed: " . $conn->connect_error]));
}

$sql = "SELECT id, name, year, team, engine, image FROM cars";
$result = $conn->query($sql);

$cars = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $cars[] = $row;
    }
}

echo json_encode(["success" => true, "cars" => $cars]);
$conn->close();
?>

