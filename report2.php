<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bir";

//Declaring variables
//$startdate = $_POST['startdate'];
//$stopdate = $_POST['stopdate'];
$sitem = $_POST['item'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM storeitems WHERE `items`='$sitem'";
$result = $conn->query($sql);

$benny = "SELECT * FROM requisitions WHERE `item` ='$sitem'"; 
$result1 = $conn->query($benny);

$benny1 = "SELECT * FROM outgoingreq WHERE `item` ='$sitem'"; 
$result2 = $conn->query($benny1);

if ($result->num_rows > 0) {
	echo "<h3> Summary On Item In Store</h3>";
    echo "<table border = 1>
	<tr>
	<th>ID</th><th>STORE ITEM  </th><th>UNIT PRICE</th><th>QUANTITY IN STORE</th><th>TOTAL VALUE</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["items"]."</td><td>".$row["unitprice"]." </td><td>".$row["qty"]." </td><td>".$row["totalcost"]." </td></tr>";
    }
    echo "</table> <br>";
} else {
    echo "0 results";
}


if ($result1->num_rows > 0) {
echo "<h3> Summary On Store Item Inventory</h3>";
    echo "<table border = 1>
	<tr>
	<th>STORE ITEM</th><th>UNIT PRICE </th><th>QUANTITY RECEIVED</th><th>SRV NO</th><th>DATE RECEIVED</th></tr>";
    // output data of each row
    while($row = $result1->fetch_assoc()) {
        echo "<tr><td>".$row["item"]."</td><td>".$row["unitprice"]."</td><td>".$row["qutyRcvd"]." </td><td>".$row["srv"]." </td><td>".$row["entry_date"]." </td></tr>";
    }
    echo "</table><br>";
} else {
    echo "0 results";
}


if ($result2->num_rows > 0) {
echo "<h3> Summary On Store Item Issuance</h3>";
    echo "<table border = 1>
	<tr>
	<th>STORE ITEM</th><th>UNIT PRICE </th><th>QUANTITY RECEIVED</th><th>SIV NO</th><th>DATE RECEIVED</th></tr>";
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        echo "<tr><td>".$row["item"]."</td><td>".$row["unitprice1"]."</td><td>".$row["qty"]." </td><td>".$row["siv"]." </td><td>".$row["entrydate"]." </td></tr>";
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
