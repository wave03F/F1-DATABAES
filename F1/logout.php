<?php
session_start();
session_destroy(); // ลบ session ทั้งหมด
echo json_encode(["success" => true, "message" => "Logged out successfully"]);
?>
