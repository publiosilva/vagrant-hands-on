<?php
echo "Testing connection... <br /> <br />";

$servername = "192.168.1.152";
$username = "phpuser";
$password = "pass";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected.";
?>
