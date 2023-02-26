<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bir";

//Declaring variables
$startdate = $_POST['startdate'];
$stopdate = $_POST['stopdate'];
//$jumpMenu = $_POST['jumpMenu'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM requisitions WHERE `s_date`
BETWEEN '$startdate'
AND '$stopdate'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 echo "<h2><u>STORE ITEMS REPORT FROM $startdate To DATE</u></h2>";
    echo "<table border = 1>
	<tr>
	<th>ID</th><th>STORE ITEM</th><th>SUPPLIER DETAILS</th><th>QUANTITY RECIEVED</th><th>UNIT PRICE</th><th>TOTAL COST</th><th>SRV NUMBER</th><th>RECEIVING OFFICER</th><th>DATE RECEIVED</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["item"]."</td><td>".$row["supplier"]." </td><td>".$row["qutyRcvd"]."</td><td>".$row["unitprice"]."</td><td>".$row["totalcost"]."</td><td>".$row["srv"]."</td><td>".$row["recievingOff"]."</td><td> ".$row["entry_date"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h2> </h2>
</body>
</html>
