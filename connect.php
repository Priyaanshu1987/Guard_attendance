<?php
$servername = "192.168.0.207";
$username = "DB_Query";
$password = "w5zUKw62Jz";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>





<!--   https://github.com/nitinkumartyagi  -->