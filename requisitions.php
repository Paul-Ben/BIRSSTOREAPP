<?php
include('session.php');
$error="";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bir";


//Declaring variables to hold form data
$item = $_POST['item']; 
$unitprice = $_POST['unitprice'];
$supplier = $_POST['supplier'];
$quantity = $_POST['quantity'];
$totalcost= ($unitprice*$quantity);
$officer = $_POST['jumpMenu'];
$srv = $_POST['srv'];
$entrydate = $_POST['entrydate']; 




// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);

$item = mysql_escape_string($_POST['item']);
$unitprice = mysql_escape_string($_POST['unitprice']);
$supplier = mysql_escape_string($_POST['supplier']);
$quantity = mysql_escape_string($_POST['quantity']);
//$totalprice = mysql_escape_string($_POST['totalprice']);
$officer = mysql_escape_string($_POST['jumpMenu']);
$srv = mysql_escape_string($_POST['srv']);
$entrydate = mysql_escape_string($_POST['entrydate']);
//$lpcs = mysql_escape_string($_POST['lpcs']);



// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
$store = "UPDATE `bir`.`storeitems` SET `unitprice`='$unitprice', `qty`=(`qty` + '$quantity'), `totalcost`=(`qty`*`unitprice`)
WHERE `items` = '$item';";
$sql = "INSERT INTO `bir`.`requisitions` (
`item`,
`unitprice`,
`supplier`,
`qutyRcvd`,
`totalcost`,
`recievingOff`,
`srv`,
`entry_date`
)
VALUES (
 '$item','$unitprice', '$supplier', '$quantity', '$totalcost', '$officer', '$srv', '$entrydate' 
);";


//validating the fields
     

if (mysql_query($sql, $conn)) {
	//$message = "New record created successfully";
  
  echo '<script type="text/javascript">'; 
  echo 'alert("Database Updated successfully");'; 
  echo 'window.location.href = "profile.php";';     // Redirecting To Other Page
  echo '</script>';
 
} else {
    echo "Error: " . $sql . "<br>" . mysql_error($conn);
}
if (mysql_query($store, $conn)) {
	//$message = "New record created successfully";
  
  echo '<script type="text/javascript">'; 
  echo 'alert("Database Updated successfully");'; 
  echo 'window.location.href = "profile.php";';     // Redirecting To Other Page
  echo '</script>';
 
} else {
    echo "Error: " . $sql . "<br>" . mysql_error($conn);
}
mysql_close($conn);

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
