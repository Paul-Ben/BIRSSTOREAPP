<?php
session_start(); // Starting Session
/*$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{*/
// Define $username and $password
$username= "ADMINISTRATOR";
//$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
/*$connection = mysql_connect("localhost", "root", "");
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
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile1.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Page</title>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
<!--
function MM_jumpMenuGo(objId,targ,restore){ //v9.0
  var selObj = null;  with (document) { 
  if (getElementById) selObj = getElementById(objId);
  if (selObj) eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0; }
}
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body>
<div id="profile">
<img src="FB_IMG_1446048997605.jpg" alt="BIRS Logo" />
<b id="birs">INVENTORY SYSTEM</b> <br />
<b id="welcome">Welcome : <i><?php echo $username; ?> </i></b></br>
<?php 
//echo date("l");
echo date("l  d-F-Y");

?>
<b id="logout"><a href="logout.php">Log Out</a></b>
<!--<b id="logout"><a href="admin_login.php">Create Users</a></b>-->
</div>

<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">CREATE USER</li>
	<li class="TabbedPanelsTab" tabindex="0">DELETE USER</li>
<li class="TabbedPanelsTab" tabindex="0">RESET USER PASSWORD</li>
<li class="TabbedPanelsTab" tabindex="0">ADD STORE ITEM</li>
     </ul>
  
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">USER CREATION FORM</br>
    </br>
   
     <form action="createuser.php" method="post" name="createuser">
     <table width="400" border="0">
  <tr>
    <td><label>USERNAME:</label></td>
    <td><input  width="40" name="username" type="text" maxlength="40" placeholder= "Enter Username" required/></td>
  </tr>
  <tr>
    <td><label>PASSWORD:</label></td>
    <td><input  width="40" name="password" type="password" maxlength="10" placeholder= "***************" required/></td>
  </tr>
  <tr>
    <td></td>
    <td><input name="submit" type="submit" value="submit" /></td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
  
    
    
  
     </form><br/>

    </div>
    
   
<div class="TabbedPanelsContent">DELETE/UPDATE USERS</br>
    </br>
   
     <form action="delete.php" method="post" name="createuser">
     <table width="400" border="0">
  <tr>
    <td><label>USERNAME:</label></td>
    <td><input  width="40" name="username" type="text" maxlength="40" placeholder= "Enter Username" required/></td>
  </tr>
  <!--<tr>
    <td><label>PASSWORD:</label></td>
    <td><input  width="40" name="password" type="password" maxlength="10" placeholder= "***************" required/></td>
  </tr>-->
  <tr>
    <td></td>
    <td><input name="submit" type="submit" value="Delete" /></td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
  
    
    
  
     </form><br/>

    </div>
 <div class="TabbedPanelsContent">RESET USER PASSWORD</br>
    </br>
   
     <form action="reset.php" method="post" name="createuser">
     <table width="400" border="0">
  <tr>
    <td><label>USERNAME:</label></td>
    <td><input  width="40" name="username" type="text" maxlength="40" placeholder= "Enter Username" required/></td>
  </tr>
  <tr>
    <td><label>PASSWORD:</label></td>
    <td><input  width="40" name="password" type="password" maxlength="10" placeholder= "***************" required/></td>
  </tr>
  <tr>
    <td></td>
    <td><input name="submit" type="submit" value="submit" /></td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
  
    
    
  
     </form><br/>

    </div>
    
<!--ADDING A NEW STORE ITEM -->
<div class="TabbedPanelsContent">RESET USER PASSWORD</br>
    </br>
   
     <form action="additem.php" method="post" name="additem">
     <table width="400" border="0">
  <tr>
    <td><label>ADD STORE ITEM:</label></td>
    <td><input  width="40" name="storeitem" type="text" maxlength="100" placeholder= "Enter Username" required/></td>
  </tr>
 
  <tr>
    <td></td>
    <td><input name="submit" type="submit" value="submit" /></td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
  
    
    
  
     </form><br/>

    </div>

    </div>

<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
</body>
</html>

