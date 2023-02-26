<?php
include('session.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="profile">
<b id="birs">BIRS INVENTORY SYSTEM</b> <br />
<b id="welcome">Welcome : <i><?php echo $login_session; ?> </i></b>
<!-- #BeginDate format:Am1a -->January 27, 2016 1:55 PM<!-- #EndDate --> 
<b id="logout"><a href="logout.php">Log Out</a></b>
<b id="logout"><a href="logout.php">Create Users</a></b>
</div>

<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">INVENTORY</li>
    <li class="TabbedPanelsTab" tabindex="0">PLATE NUMBER INVENTORY</li>
    <li class="TabbedPanelsTab" tabindex="0">OTHER STORE ITEMS</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">REQUISITION FORM INCOMMING ITEMS</br>
    </br>
   
     <form action="requisitions.php" method="post" name="Requisitions">
     <table width="400" border="0">
  <tr>
    <td> <label>ITEM:</label></td>
    <td> <input  width="40" name="item" type="text" maxlength="40" placeholder= "Type item received" /></td>
  </tr>
  <tr>
    <td><label>SUPPLIER:</label></td>
    <td><input  width="40" name="supplier" type="text" maxlength="40" placeholder= "Type Supplier credentials"/></td>
  </tr>
  <tr>
    <td><label>QUANTITY RECEIVED:</label></td>
    <td><input  width="40" name="quantity" type="text" maxlength="6" placeholder= "Enter Number of Items"/></td>
  </tr>
  <tr>
    <td><label>RECEIVING OFFICER:</label></td>
    <td><select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
    <option>--Select One--</option>
      <option>Assistant Chief Officer</option>
      <option>ICT Officer</option>
      <option>Higher Stor Officer</option>
      <option> Store Keeper</option>
    </select> </td>
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
    <div class="TabbedPanelsContent">PLATE NUMBER INVENTORY </br></br>
    
    <form action="pnumbers.php" method="post" name="pnumbers">
     <table width="400" border="0">
  <tr>
    <td>L.G.A :</td>
    <td> <select name="jumpMenu2" id="jumpMenu" width="40" onchange="MM_jumpMenu('parent',this,0)" >
    <option>--Select One--</option>
      <option>ADO LOCAL GOVERNMENT</option>
      <option>AGATU LOCAL GOVERNMENT</option>
      <option>ALIADE LOCAL GOVERNMENT</option>
      <option>APA LOCAL GOVERNMENT</option>
      <option>BURUKU LOCAL GOVERNMENT</option>
      <option>GBAJIMBA LOCAL GOVERNMENT</option>
      <option>GBOKO LOCAL GOVERNMENT</option>
      <option>KATSINA-ALA LOCAL GOVERNMENT</option>
      <option>KONSHISHA LOCAL GOVERNMENT</option>
      <option>KWANDE LOCAL GOVERNMENT</option>
      <option>LOGO LOCAL GOVERNMENT</option>
      <option>MAKURDI LOCAL GOVERNMENT</option>
      <option>NAKA LOCAL GOVERNMENT</option>
      <option>OBI LOCAL GOVERNMENT</option>
      <option>OGBADIBO LOCAL GOVERNMENT</option>
      <option>OHIMINI LOCAL GOVERNMENT</option>
      <option>OJU LOCAL GOVERNMENT</option>
      <option>OKPOKWU LOCAL GOVERNMENT</option>
      <option>OTUKPO LOCAL GOVERNMENT</option>
      <option>TARKA LOCAL GOVERNMENT</option>
      <option>UKUM LOCAL GOVERNMENT</option>
      <option>USHONGO LOCAL GOVERNMENT</option>
      <option>VANDEIKIYA LOCAL GOVERNMENT</option>
      
    </select></td>  
  </tr>
  <tr>
    <td><label>APPBRVIATION:</label></td>
    <td><select name="jumpMenu3" id="jumpMenu" width="40" onchange="MM_jumpMenu('parent',this,0)" >
    <option>--Select One--</option>
      <option>GMU</option>
      <option>GTU</option>
      <option>ALD</option>
      <option>GKP</option>
      <option>BKB</option>
      <option>YJG</option>
      <option>GBK</option>
      <option>KAL</option>
      <option>TSE</option>
      <option>WDP</option>
      <option>GBG</option>
      <option>MKD</option>
      <option>NAK</option>
      <option>BRT</option>
      <option>BGT</option>
      <option>DKP</option>
      <option>JUX</option>
      <option>PKG</option>
      <option>TKP</option>
      <option>WNN</option>
      <option>UKM</option>
      <option>SEL</option>
      <option>VDY</option>
      
    </select></td>
  </tr>
  <tr>
    <td><label>PLATE TYPE:</label></td>
    <td><select name="jumpMenu4" id="jumpMenu" width="40" onchange="MM_jumpMenu('parent',this,0)">
    <option>--Select One--</option>
      <option>MV-PRIVATE</option>
      <option>MC-PRIVATE</option>
      <option>MV-COMMERCIAL</option>
      <option>MC-COMMERCIAL</option>
      <option>AT</option>
    </select></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td><label>QUANTITY :</label></td>
    <td><input  width="40" name="quantity1" type="text" maxlength="6" placeholder= "Enter Number of Items"/></td>
  </tr>
  <tr>
    <td><label>PLATE NO RANGE :</label></td>
    <td><input  width="40" name="quantity1" type="text" maxlength="6" placeholder= "Enter Plate No Range"/></td>
  </tr>
  <tr>
    <td><label>RECEIVING OFFICER:</label></td>
    <td><select name="jumpMenu5" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
    <option>--Select One--</option>
      <option>Assistant Chief Officer</option>
      <option>ICT Officer</option>
      <option>Higher Stor Officer</option>
      <option> Store Keeper</option>
    </select> </td>
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
    <div class="TabbedPanelsContent">Content 3</div>
  </div>
</div>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
</body>
</html>
