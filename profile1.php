<?php
include ('session2.php');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Page</title>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
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
    <li class="TabbedPanelsTab" tabindex="0">REPORTS</li>
     </ul>
  
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">USER CREATION FORM</br>
    </br>
   
     <form action="createuser.php" method="post" name="Requisitions">
     <table width="400" border="0">
  <tr>
    <td><label>USERNAME:</label></td>
    <td><input  width="40" name="username" type="text" maxlength="40" placeholder= "Type Supplier credentials" required/></td>
  </tr>
  <tr>
    <td><label>PASSWORD:</label></td>
    <td><input  width="40" name="password" type="text" maxlength="6" placeholder= "Enter Number of Items" required/></td>
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
  
    
    
  
     </form>
    </div>
    
    <div class="TabbedPanelsContent">REPORTS</br>
    </br>
   
    <!-- <form action="" method="post" name="Requisitions">
     <table width="400" border="0">
  <tr>
    <td> <label>ITEM:</label></td>
    <td> <input  width="40" name="item" type="text" maxlength="40" placeholder= "Type item received" required /></td>
  </tr>
  <tr>
    <td><label>SUPPLIER:</label></td>
    <td><input  width="40" name="supplier" type="text" maxlength="40" placeholder= "Type Supplier credentials" required/></td>
  </tr>
  <tr>
    <td><label>QUANTITY RECEIVED:</label></td>
    <td><input  width="40" name="quantity" type="text" maxlength="6" placeholder= "Enter Number of Items" required/></td>
  </tr>
   <tr>
    <td><label>NO OF LOOSE PCS:</label></td>
    <td><input  width="40" name="lpcs" type="text" maxlength="6" placeholder= "Enter Number of Items" required/></td>
  </tr>
  <tr>
    <td><label>RECEIVING OFFICER:</label></td>
    <td><select name="jumpMenu" id="jumpMenu" width="40" onchange="MM_jumpMenu('parent',this,0)" value = " " required>
    <option> </option>
      <option>Assistant Chief Officer</option>
      <option>ICT Officer</option>
      <option>Higher Stor Officer</option>
      <option> Store Keeper</option>
    </select> </td>
  </tr>
  <tr>
    <td><label>DATE:</label></td>
    <td><input  width="40" name="entrydate" type="text" maxlength="6" value="<?php echo date("d-m-y");?>" required/></td>
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
  
    
    
  
     </form>-->
    </div>
    </div>

<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>


</body>
</html>
