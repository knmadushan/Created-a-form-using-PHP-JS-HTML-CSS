<?php
$date = $_POST['date'];
$Destination = $_POST['Desti'];
$Budget = $_POST['RBudget'];
$down = $_POST['drop'];




if (empty($_POST['t1'])){
	$t1="";
} else {
	$t1 = $_POST['t1'];
}
if (empty($_POST['t2'])){
	$t2="";
} else {
	$t2 = $_POST['t2'];
}

if (empty($_POST['t3'])){
	$t3="";
} else {
	$t3 = $_POST['t3'];
}

if (empty($_POST['t4'])){
	$t4="";
} else {
	$t4 = $_POST['t4'];
}

if (empty($_POST['t5'])){
	$t5="";
} else {
	$t5 = $_POST['t5'];
}

if (empty($_POST['t6'])){
	$t6="";
} else {
	$t6 = $_POST['t6'];
}
$tot = $t1." ".$t2." ".$t3." ".$t4." ".$t5." ".$t6;
 
if (empty($_POST['s1'])){
	$s1="";
}else {
	$s1 = $_POST['s1'];
}

if (empty($_POST['s2'])){
	$s2="";
} else {
	$s2 = $_POST['s2'];
}

if (empty($_POST['s3'])){
	$s3="";
} else {
	$s3 = $_POST['s3'];
}

if (empty($_POST['s4'])){
	$s4="";
} else {
	$s4= $_POST['s4'];
}
$sos=$s1." ".$s2." ".$s3." ".$s4;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
	die ("Connection failed: ".$conn->connect_error);
}
$sql = "INSERT INTO `travel_agency` (`Date`, `Destination`, `Budget`, `City`, `Trip`, `Service`,`ID`) VALUES ('$date', '$Destination', '$Budget', '$down', '$tot', '$sos','');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql ="SELECT Date, Destination, Budget, City, Trip, Service from travel_agency";
		
		$result = $conn->query($sql);
		
		if($result->num_rows > 0){
			
			while($row = $result->fetch_assoc()){
				
				echo "<br> Date: ".$row["Date"]."<br>";
				echo "<br> Destination: ".$row["Destination"]."<br>";
				echo "<br> Budget: ".$row["Budget"]."<br>";
				echo "<br> City: ".$row["City"]."<br>";
				echo "<br> Trip: ".$row["Trip"]."<br>";
				echo "<br> Service: ".$row["Service"]."<br>";
				
			}
		}else{
			echo "0 result";
		}
				
$conn->close();


?>