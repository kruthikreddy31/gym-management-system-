<?php
// UPDATE THESE AFTER UPLOADING TO HOSTING
$servername = "localhost";  // Will change later
$username = "root";
$password = "";
$database = "gym_db";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<!-- Database connected successfully! -->";
?>
