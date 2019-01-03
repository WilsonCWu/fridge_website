<?php
$command = $_REQUEST["q"];
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
$sql = "INSERT INTO commands (date, time, command) values(CURRENT_DATE(), NOW(), '" . $command ."')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(i);
?>