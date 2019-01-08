<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "fridge";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM commands";
if ($conn->query($sql) === TRUE) {
  echo "Cleared commands successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(i);
?>