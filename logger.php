<?php
$servername = "sql105.epizy.com";
$username = "epiz_29400506";
$password = "W9i5ePRgG0w0";
$dbname = "epiz_29400506_ip";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `ip`(`ip`) VALUES ('23.213.134.34')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>