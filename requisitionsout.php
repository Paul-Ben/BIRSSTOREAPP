
<?php
include('session.php');
$error="";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bir";


//Declaring variables to hold form data
$item = $_POST['item'];
$unitprice1 = $_POST['unitprice1'];
$dept = $_POST['dept'];
$quantity = $_POST['quantity'];
$totalcost= ($unitprice1*$quantity);
$collect = $_POST['collect'];
$jumpMenu = $_POST['jumpMenu'];
$siv = $_POST['siv'];
$entrydate = $_POST['entrydate']; 




// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);

$item = mysql_escape_string($_POST['item']);
$unitprice1 = mysql_escape_string($_POST['unitprice1']);
$dept = mysql_escape_string($_POST['dept']);
$quantity = mysql_escape_string($_POST['quantity']);
$collect = mysql_escape_string($_POST['collect']);
$jumpMenu = mysql_escape_string($_POST['jumpMenu']);
$siv = mysql_escape_string($_POST['siv']);
$entrydate = mysql_escape_string($_POST['entrydate']);



// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
$store = "UPDATE `bir`.`storeitems` SET `qty`=(`qty` - '$quantity')
WHERE `items` = '$item';";

$sql = "INSERT INTO `bir`.`outgoingreq` (
`item`,
`unitprice1`,
`unit`,
`qty`,
`totalcost`,
`recvingoff`,
`issuoff`,
`siv`,
`entrydate`
)
VALUES (
 '$item', '$unitprice1', '$dept', '$quantity', '$totalcost', '$collect', '$jumpMenu', '$siv', '$entrydate'
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
