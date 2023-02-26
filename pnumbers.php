<?php
include('session.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bir";


//Declaring variables to hold form data
$jumpMenu2 = $_POST['jumpMenu2'];
$jumpMenu3 = $_POST['jumpMenu3'];
$jumpMenu4 = $_POST['jumpMenu4'];
$quantity1 = $_POST['quantity1'];
$jumpMenu5 = $_POST['jumpMenu5'];
$pnrange = $_POST['pnrange'];
$entrydate = $_POST['entrydate']; 
$mvp = $_POST['mvp'];
$mvc = $_POST['mvc'];
$mcp = $_POST['mcp'];
$mcc = $_POST['mcc'];
$att = $_POST['att'];

// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);

$jumpMenu2 = mysql_escape_string($_POST['jumpMenu2']);
$jumpMenu3 = mysql_escape_string($_POST['jumpMenu3']);
$jumpMenu4 = mysql_escape_string($_POST['jumpMenu4']);
$quantity1 = mysql_escape_string($_POST['quantity1']);
$jumpMenu5 = mysql_escape_string($_POST['jumpMenu5']);
$pnrange = mysql_escape_string($_POST['pnrange']);
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

$store = "UPDATE `bir`.`lga` SET `mv_pte`=(`mv_pte` + '$mvp'), `mv_comm` =(`mv_comm` + '$mvc'), `mc_pte` =(`mc_pte` + '$mcp'), `mc_comm` =(`mc_comm` + '$mcc'), `att`=(`att`+ '$att')
WHERE `local_govt` = '$jumpMenu2';";
$sql = "INSERT INTO `bir`.`p_numbers` (
`localgvt`,
`abbr`,
`ptype`,
`qty_rcv`,
`rcv_off`,
`entty_date`,
`pn_range`

)
VALUES (
 '$jumpMenu2', '$jumpMenu3', '$jumpMenu4', '$quantity1','$jumpMenu5','$entrydate','$pnrange' );";


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
  echo 'alert("New record created successfully");'; 
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
