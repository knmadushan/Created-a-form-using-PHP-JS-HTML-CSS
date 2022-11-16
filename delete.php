<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel_db";

$search = $_POST['id'];

$conn = mysqli_connect("localhost","root","","travel_db");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM `travel_agency` WHERE ID='$search'";	

if ($conn->query($sql) === TRUE) {
  echo " Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

?>
