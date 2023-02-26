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

$sql = "SELECT * FROM p_numbers WHERE `s_date` >= '$startdate'
AND `s_date` <='$stopdate'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 echo "<h2><u>RECEIVED PLATE NUMBER REPORT FROM $startdate To $stopdate</u></h2>";
    echo "<table border = 1>
	<tr>
	<th>ID</th><th>LOCAL GOVERNMENT AREA</th><th>CODE</th><th>PLATE NO TYPE</th><th>QUANTITY RECIEVED</th><th>RECEIVING OFFICER</th><th>DATE RECEIVED</th><th>PLATE NUMBER RANGE</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["localgvt"]."</td><td>".$row["abbr"]." </td><td>".$row["ptype"]."</td><td> ".$row["qty_rcv"]."</td><td> ".$row["rcv_off"]."</td><td> ".$row["entty_date"]."</td><td> ".$row["pn_range"]."</td></tr>";
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
