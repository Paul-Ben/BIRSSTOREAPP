<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BIRS INVENTORY HOME</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#009966">
<div id="main">
<h1></h1>
<img src="FB_IMG_1446048997605.jpg" />
<div id="login">
<h2>INVENTORY SYSTEM LOGIN</h2></br>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text" />
<p>&nbsp;</p>
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password" />
<p>&nbsp;</p>
<p><span><?php echo $error; ?></span>
  <input name="submit" type="submit" value=" Login " />
</p>
</form>
</div>
</div>
</body>
</html>
