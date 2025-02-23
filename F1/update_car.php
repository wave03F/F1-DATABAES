<?php
header("Content-Type: application/json");
$conn = new mysqli("localhost", "root", "", "f1_database");

$data = json_decode(file_get_contents("php://input"));
$id = $conn->real_escape_string($data->id);
$name = $conn->real_escape_string($data->name);
$year = $conn->real_escape_string($data->year);
$team = $conn->real_escape_string($data->team);
$engine = $conn->real_escape_string($data->engine);

$query = "UPDATE cars SET name='$name', year='$year', team='$team', engine='$engine' WHERE id='$id'";

if ($conn->query($query)) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}
?>
