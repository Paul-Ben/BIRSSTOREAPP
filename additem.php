
<?php
include('session.php');
$error="";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bir";


//Declaring variables to hold form data
$storeitem = $_POST['storeitem'];





// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);

$storeitem = mysql_escape_string($_POST['storeitem']);




// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}

$sql = "INSERT INTO `bir`.`storeitems` (
`items`

)
VALUES (
 '$storeitem'
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
