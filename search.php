<html>
<head><title></title>
<head>
<body>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel_db";

error_reporting(0);
$conn = mysqli_connect("localhost","root","","travel_db");
if(count($_POST)>0) {
$search = $_POST['id'];
$result = mysqli_query($conn,"SELECT * FROM travel_agency where ID='$search' ");


$i=0;
while($row = mysqli_fetch_array($result)) {
	
$id = $row['id'];
$r1=$row["Date"]; 
$r2=$row["Destination"]; 
$r3=$row["Budget"]; 
$r4=$row["City"]; 
$r5=$row["Trip"]; 
$r6=$row["Service"]; 

}
}
$i++


?>

<form action="delete.php" method="POST" >
<label>Date:</label> <input type='date' name='da' value='<?php echo "$r1" ?>'><br><br>
<label>Destination:</label> <input type='text' name='denis' value='<?php echo "$r2"?>'><br><br>
<label>Budget $:</label> <input type='text' name='bug' value='<?php echo "$r3" ?>'><br><br>
<label>City:</label> <input type='text' name='city' value='<?php echo "$r4" ?>'><br><br>
<label>Trip:</label> <input type='text' name='trip' value='<?php echo "$r5" ?>'><br><br>
<label>Service:</label> <input type='text' name='ser' value='<?php echo "$r6" ?>'><br><br>
<label>ID:</label> <input type='text' name='id' value='<?php echo "$id" ?>'><br><br>
<button type="SUBMIT">DELETE</button>
</form>

<form action="update.php" method="POST">
<label>Change Budget $:</label><input type="text" name='update'>
<button type="SUBMIT" value="<?php echo $search ?>" name="upd">UPDATE</button>
</form>

</body>
</html>