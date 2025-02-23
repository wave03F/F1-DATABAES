<?php
header("Content-Type: application/json");
$conn = new mysqli("localhost", "root", "", "f1_database");

if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Database connection failed"]));
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"] ?? "";
    
    if (empty($id)) {
        echo json_encode(["success" => false, "message" => "Car ID is required"]);
        exit;
    }

    $stmt = $conn->prepare("DELETE FROM cars WHERE id = ?");
    $stmt->bind_param("i", $id);
    $success = $stmt->execute();

    echo json_encode(["success" => $success, "message" => $success ? "Car deleted!" : "Failed to delete car"]);
    $stmt->close();
}

$conn->close();
?>


