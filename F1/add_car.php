<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include "db.php";

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data["name"]) && isset($data["year"]) && isset($data["team"]) && isset($data["engine"]) && isset($data["image"])) {
    $name = $conn->real_escape_string($data["name"]);
    $year = (int) $data["year"];
    $team = $conn->real_escape_string($data["team"]);
    $engine = $conn->real_escape_string($data["engine"]);
    $image = $conn->real_escape_string($data["image"]);

    $sql = "INSERT INTO cars (name, year, team, engine, image) VALUES ('$name', $year, '$team', '$engine', '$image')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => true, "message" => "Car added successfully"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error: " . $conn->error]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid input"]);
}

$conn->close();
?>
