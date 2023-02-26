<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bir";

//Declaring variables
//$startdate = $_POST['startdate'];
//$stopdate = $_POST['stopdate'];
//$jumpMenu = $_POST['jumpMenu'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM lga";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<h2><u>PLATE NUMBER SUMMARY REPORT </u></h2>";	
    echo "<table border = 1>
	<tr>
	<th>ID</th><th>LOCAL GOVERNMENT AREA</th><th>CODE</th><th>MV PRIVATE</th><th>MV COMMERCIAL</th><th>MC PRIVATE</th><th>MC COMMERCIAL</th><th>ARTICULATED</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["local_govt"]."</td><td>".$row["abb"]." </td><td>".$row["mv_pte"]."</td><td> ".$row["mv_comm"]."</td><td> ".$row["mc_pte"]."</td><td> ".$row["mc_comm"]."</td><td> ".$row["att"]."</td></tr>";
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

<body >

</body>
</html>
