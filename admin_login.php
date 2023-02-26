
<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("bir", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("SELECT * FROM admip WHERE user_pwd='$password' AND user_name='$username'", $connection);
//$rows = mysql_num_rows($query);
if ($username== "admin" && $password == "Chairman1!") {
//$_SESSION['login_user']=$username; // Initializing Session
header("location: admin.php");
exit; // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>

<?php
//include('admin.php'); // Includes Login Script

/*if(isset($_SESSION['login_user'])){
header("location: profile1.php");
}*/
$error= "Invalid Credentials";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BIRS INVENTORY</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#009966" >
<div id="main">
<h1></h1>
<img src="FB_IMG_1446048997605.jpg" />
<div id="login">
<h2>ADMINISTRATOR LOGIN</h2></br>
<form action="" method="post">
<label>UserName :</label>
<input id="username" name="username" placeholder="username" type="text"  required />
<p>&nbsp;</p>
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password" required/>
<p>&nbsp;</p>
<p><span><?php /*?><?php echo $error; ?><?php */?></span>
  <input name="submit" type="submit" value=" Login " />
</p>
</form>
</div>
</div>
</body>
</html>
