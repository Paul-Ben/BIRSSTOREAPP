<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bir";

//Declaring variables
$statdate = $_POST['statdate'];
$stpdate = $_POST['stpdate'];
//$jumpMenu = $_POST['jumpMenu'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM pnoutgoing WHERE `s_date`
BETWEEN '$statdate'
AND '$stpdate' order by id ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 echo "<h2><u>ISSUED PLATE NUMBER REPORT FROM $statdate To $stpdate</u></h2>";
    echo "<table border = 1>
	<tr>
	<th>ID</th><th>LOCAL GOVERNMENT AREA</th><th>CODE</th><th>PLATE NO TYPE</th><th>QUANTITY ISSUED</th><th>PLATE NUMBER RANGE</th><th>ISSUING OFFICER</th><th>REQUESTING OFFICER</th><th>RECEIVING OFFICER</th><th>DATE ISSUED</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["lga"]."</td><td>".$row["abbr"]." </td><td>".$row["ptype"]."</td><td> ".$row["qty"]."</td><td> ".$row["prange"]."</td><td> ".$row["issuoff"]."</td><td> ".$row["rqoff"]."</td><td> ".$row["rcvoff"]."</td><td> ".$row["entrydate"]."</td></tr>";
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
</body>
</html>
