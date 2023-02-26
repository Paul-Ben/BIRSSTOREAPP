<?php

$error="";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bir";


//Declaring variables to hold form data
$username1 = $_POST['username'];
$password1 = $_POST['password'];


// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);

$username1 = mysql_escape_string($_POST['username']);
$password1 = mysql_escape_string($_POST['password']);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}

$sql = "INSERT INTO `bir`.`login` (
`username`,
`password`
	
)
VALUES (
 '$username1', '$password1'
);";


//validating the fields
     

if (mysql_query($sql, $conn)) {
	//$message = "New record created successfully";
  
  echo '<script type="text/javascript">'; 
  echo 'alert("New User created successfully");'; 
  echo 'window.location.href = "admin.php";';     // Redirecting To Other Page
  echo '</script>';
 
} else {
    echo "Error: " . $sql . "<br>" . mysql_error($conn);
}

mysql_close($conn);

?>


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
