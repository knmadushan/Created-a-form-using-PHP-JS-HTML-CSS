<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel_db";

$upd = $_POST['upd'];
$update = $_POST['update'];

$conn = mysqli_connect("localhost","root","","travel_db");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE travel_agency SET Budget = '$update' WHERE ID = '$upd'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();



?>