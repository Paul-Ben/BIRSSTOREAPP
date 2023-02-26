<?php
include('session.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bir";


//Declaring variables to hold form data
$jumpMenu6 = $_POST['jumpMenu6'];
$jumpMenu7 = $_POST['jumpMenu7'];
$jumpMenu8 = $_POST['jumpMenu8'];
$quantity1l = $_POST['quantity1l'];
$pnrange = $_POST['pnrange'];
$jumpMenu9 = $_POST['jumpMenu9'];
$rqoff = $_POST['rqoff'];
$entrydate = $_POST['entrydate']; 
$mvp = $_POST['mvp'];
$mvc = $_POST['mvc'];
$mcp = $_POST['mcp'];
$mcc = $_POST['mcc'];
$att = $_POST['att'];

// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);

$jumpMenu6 = mysql_escape_string($_POST['jumpMenu6']);
$jumpMenu7 = mysql_escape_string($_POST['jumpMenu7']);
$jumpMenu8 = mysql_escape_string($_POST['jumpMenu8']);
$quantity1l = mysql_escape_string($_POST['quantity1l']);
$pnrange = mysql_escape_string($_POST['pnrange']);
$jumpMenu9 = mysql_escape_string($_POST['jumpMenu9']);
$rqoff = mysql_escape_string($_POST['rqoff']);
$rcvoff = mysql_escape_string($_POST['rcvoff']);
$entrydate = mysql_escape_string($_POST['entrydate']);
$mvp = mysql_escape_string($_POST['mvp']);
$mvc = mysql_escape_string($_POST['mvc']);
$mcp = mysql_escape_string($_POST['mcp']);
$mcc = mysql_escape_string($_POST['mcc']);
$att = mysql_escape_string($_POST['att']);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}

$store = "UPDATE `bir`.`lga` SET `mv_pte`= (`mv_pte` - '$mvp'), `mv_comm` = (`mv_comm` - '$mvc'), `mc_pte` = (`mc_pte` - '$mcp'), `mc_comm` = (`mc_comm` -'$mcc') 
WHERE `local_govt` = '$jumpMenu6';";

$sql = "INSERT INTO `bir`.`pnoutgoing` (
`lga`,
`abbr`,
`ptype`,
`qty`,
`prange`,
`issuoff`,
`rqoff`,
`rcvoff`,
`entrydate`

)
VALUES (
 '$jumpMenu6', '$jumpMenu7', '$jumpMenu8', '$quantity1l', '$pnrange','$jumpMenu9','$rqoff','$rcvoff', '$entrydate'
);";


//validating the fields
 
 if (mysql_query($store, $conn)) {
	//$message = "New record created successfully";
  
  echo '<script type="text/javascript">'; 
  echo 'alert("Database Updated successfully");'; 
  echo 'window.location.href = "profile.php";';     // Redirecting To Other Page
  echo '</script>';
 
} else {
    echo "Error: " . $sql . "<br>" . mysql_error($conn);
}
    

if (mysql_query($sql, $conn)) {
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
