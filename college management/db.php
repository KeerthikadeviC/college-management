<?php
$servername = "localhost";
$username = "root";
$password = ""; // Leave blank for default
$dbname = "college_management"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
