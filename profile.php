<?php
include('session.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>INVENTORY SYSTEM</title>

<script>  
function loadLGA(){
var e = document.getElementById("abbr");
var abb = e.options[e.selectedIndex].value;
var abb2 = e.options[e.selectedIndex].title;
document.getElementById("lga").value= abb2;
}

function loadLGB(){
var e = document.getElementById("abb11");
var abb = e.options[e.selectedIndex].value;
var abb2 = e.options[e.selectedIndex].title;
document.getElementById("lga22").value= abb2;
}
</script>

<link href="style.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"> </script>


<link rel="stylesheet" href="calendar.css"/>
<script src="calendar.js"></script>

<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="profile">
<img src="FB_IMG_1446048997605.jpg" alt="BIRS Logo" />
<b id="birs">INVENTORY SYSTEM</b> <br />
<b id="welcome">Welcome : <i><?php echo $login_session; ?> </i></b></br>
<?php echo date("l  d-F-Y");?>
<b id="logout"><a href="logout.php">Log Out</a></b>
<b id="logout"><a href="admin_login.php">Admin Login</a></b>
</div>

<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">INVENTORY</li>
    <li class="TabbedPanelsTab" tabindex="0">REQUISITIONS</li>
    <li class="TabbedPanelsTab" tabindex="0">PLATE NUMBER INVENTORY</li>
    <li class="TabbedPanelsTab" tabindex="0">PLATE NUMBER ISSUANCE</li>
     <li class="TabbedPanelsTab" tabindex="0">PLATE NO REPORTS</li>
	<li class="TabbedPanelsTab" tabindex="0">STORE ITEMS REPORTS</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">INVENTORY FORM FOR INCOMMING ITEMS</br>
    </br>
   
     <form action="requisitions.php" method="post" name="Requisitions">
     <table width="600" border="0">
      <tr>
    <td><label>ITEM:</label></td>
    <td><select name="item" id="items" width="60" placeholder="Select an Item" required>
    <option> </option>
      <option value="40 Leaves BIRS Exercise Books" title="40 Leaves BIRS Exercise Books">40 Leaves BIRS Exercise Books</option>
      <option value="Application for Replacement of Number Plate Form" title="Application for Replacement of Number Plate Form">Application for Replacement of Number Plate Form</option>
      <option value= "Authority for Variation in Pay Booklets" title="Authority for Variation in Pay Booklets">Authority for Variation in Pay Booklets</option>
      <option value= "Benue State Financial Instructions 2013" title="Benue State Financial Instructions 2013">Benue State Financial Instructions 2013</option>
      <option value="Benue State Gazette 18th Nov. 2010" title="Benue State Gazette 18th Nov. 2010">Benue State Gazette 18th Nov. 2010</option>
      <option value="Benue State Stores Regulation 2013" title="Benue State Stores Regulation 2013">Benue State Stores Regulation 2013</option>
      <option value="Big Sized Envelops" title="Big Sized Envelops">Big Sized Envelops</option>
      <option value="BIRS Branded 2016 Diaries" title="BIRS Branded 2016 Diaries">BIRS Branded 2016 Diaries</option>
      <option value="BIRS Branded Mugs" title="BIRS Branded Mugs">BIRS Branded Mugs</option>
      <option value="BIRS Branded T-Shirts and Face Caps" title="BIRS Branded T-Shirts and Face Caps">BIRS Branded T-Shirts and Face Caps</option>
      <option value="BIRS ICT Policy Booklet" title="BIRS ICT Policy Booklet">BIRS ICT Policy Booklet</option>
      <option value="BIRS 'Inspection Point' Sign Board" title="BIRS 'Inspection Point' Sign Board">BIRS 'Inspection Point' Sign Board</option>
      <option value="BIRS Mouse pads" title="BIRS Mouse pads">BIRS Mouse pads</option>
      <option value="BIRS stickers" title="BIRS stickers">BIRS stickers</option>
      <option value="BIRS TIN Branded Key holders" title="BIRS TIN Branded Key holders">BIRS TIN Branded Key holders</option>
      <option value="BIRS TIN Branded Wrist Bands" title="BIRS TIN Branded Wrist Bands">BIRS TIN Branded Wrist Bands</option>
      <option value="Change of Vehicle Receipt" title="Change of Vehicle Receipt">Change of Vehicle Receipt</option>
      <option value="Civil Service Annual Performance Report" title="Civil Service Annual Performance Report">Civil Service Annual Performance Report</option>
      <option value="Claim for Mileage" title="Claim for Mileage">Claim for Mileage</option>
      <option value="Confidential Tax Files" title="Confidential Tax Files">Confidential Tax Files</option>
      <option value="Damaged Security Cameras" title="Damaged Security Cameras">Damaged Security Cameras</option>
      <option value="Demand Notice: Development Levy Form (old)" title="Demand Notice: Development Levy Form (old)">Demand Notice: Development Levy Form (old)</option>
      <option value="Departmental Vote Expenditure Booklet" title="Departmental Vote Expenditure Booklet">Departmental Vote Expenditure Booklet</option>
      <option value="Employer Certificate of Pay and Tax Receipt" title="Employer Certificate of Pay and Tax Receipt">Employer Certificate of Pay and Tax Receipt</option>
      <option value="Engraver" title="Engraver">Engraver</option>
      <option value= "File Jackets (Open)" title="File Jackets (Open)">File Jackets (Open)</option>
      <option value= "File Jackets (Secret)" title="File Jackets (Secret)">File Jackets (Secret)</option>
      <option value="Food Basket Post Office Stamps" title="Food Basket Post Office Stamps">Food Basket Post Office Stamps</option>
      <option value="Furniture Distribution Register" title="Furniture Distribution Register">Furniture Distribution Register</option>
      <option value="Ground Rent Fee Demand Notice Booklet" title="Ground Rent Fee Demand Notice Booklet">Ground Rent Fee Demand Notice Booklet</option>
      <option value="Gugur Waterfalls Post Office Stamps" title="Gugur Waterfalls Post Office Stamps">Gugur Waterfalls Post Office Stamps</option>
      <option value="Guide To Administrative Procedure 2013" title="Guide To Administrative Procedure 2013">Guide To Administrative Procedure 2013</option>
      <option value="Hackney Tax Permit Sticker (2013)" title="Hackney Tax Permit Sticker (2013)">Hackney Tax Permit Sticker (2013)</option>
      <option value="Head Pan" title="Head Pan">Head Pan</option>
      <option value="Hotels, etc Consumption Tax Weekly Returns form" title="Hotels, etc Consumption Tax Weekly Returns form">Hotels, etc Consumption Tax Weekly Returns form</option>
      <option value="How To Get Your TIN Poster" title="How To Get Your TIN Poster">How To Get Your TIN Poster</option>
      <option value="Imprest Warrant" title="Imprest Warrant">Imprest Warrant</option>
      <option value="Internal Memo Pad" title="Internal Memo Pad">Internal Memo Pad</option>
      <option value="J.S. Tarka Post Office Stamps" title="J.S. Tarka Post Office Stamps">J.S. Tarka Post Office Stamps</option>
      <option value="Ladder" title="Ladder">Ladder</option>
      <option value="Laserjet 53A Printer Catridge" title="Laserjet 53A Printer Catridge">Laserjet 53A Printer Catridge</option>
      <option value="Learners' Permit Booklets" title="Learners' Permit Booklets">Learners' Permit Booklets</option>
      <option value="Leave Form" title="Leave Form">Leave Form</option>
      <option value="Letter Headed Papers" title="Letter Headed Papers">Letter Headed Papers</option>
      <option value="Letter Headed Papers" title="Letter Headed Papers">Letter Headed Papers</option>
      <option value="Metal Rods for sign posts" title="Metal Rods for sign posts">Metal Rods for sign posts</option>
      <option value="Mini pads" title="Mini pads">Mini pads</option>
      <option value="Motorcycle Vehicle Licenses (2013)" title="Motorcycle Vehicle Licenses (2013)">Motorcycle Vehicle Licenses (2013)</option>
      <option value= "National Vehicle Administration Form" title="National Vehicle Administration Form">National Vehicle Administration Form</option>
      <option value= "Norton 2012 Antivirus" title="Norton 2012 Antivirus">Norton 2012 Antivirus</option>
      <option value="Notice of Assessment Booklets" title="Notice of Assessment Booklets">Notice of Assessment Booklets</option>
      <option value="Old Calendars (2012)" title="Old Calendars (2012)">Old Calendars (2012)</option>
      <option value="Old Plate Numbers" title="Old Plate Numbers">Old Plate Numbers</option>
      <option value="Pay As You Earn System Table Booklet" title="Pay As You Earn System Table Booklet">Pay As You Earn System Table Booklet</option>
      <option value="Payment Treasury Cash Book" title="Payment Treasury Cash Book">Payment Treasury Cash Book</option>
      <option value="Personal Income Tax Booklets" title="Personal Income Tax Booklets">Personal Income Tax Booklets</option>
      <option value="Personal Income Tax Certificate" title="Personal Income Tax Certificate">Personal Income Tax Certificate</option>
      <option value="Personal Income Tax Receipt Booklets" title="Personal Income Tax Receipt Booklets">Personal Income Tax Receipt Booklets</option>
      <option value="Personal Income Tax Receipts" title="Personal Income Tax Receipts">Personal Income Tax Receipts</option>
      <option value="Personal Income Tax Return Form - Form 'A' (New)" title="Personal Income Tax Return Form - Form 'A' (New)">Personal Income Tax Return Form - Form 'A' (New)</option>
      <option value="Personal Income Tax Return Form Form 'A' (Old)" title="Personal Income Tax Return Form Form 'A' (Old)">Personal Income Tax Return Form Form 'A' (Old)</option>
      <option value="Receipt Treasury Cash Book" title="Receipt Treasury Cash Book">Receipt Treasury Cash Book</option>
      <option value="Recommendation for Disciplinary Action Form" title="Recommendation for Disciplinary Action Form">Recommendation for Disciplinary Action Form</option>
      <option value="Seasons Greeting Cards" title="Seasons Greeting Cards">Seasons Greeting Cards</option>
      <option value="Shovel" title="Shovel">Shovel</option>
      <option value="Single Plate Numbers (Motor Vehicle)" title="Single Plate Numbers (Motor Vehicle)">Single Plate Numbers (Motor Vehicle)</option>
      <option value="Single Plate Numbers (Motorcycle)" title="Single Plate Numbers (Motorcycle)">Single Plate Numbers (Motorcycle)</option>
      <option value="Small Size Envelops" title="Small Size Envelops">Small Size Envelops</option>
      <option value="Socket Adapters (big)" title="Socket Adapters (big)">Socket Adapters (big)</option>
      <option value="Socket Adapters (small)" title="Socket Adapters (small)">Socket Adapters (small)</option>
      <option value="Spare Drawer Keys" title="Spare Drawer Keys">Spare Drawer Keys</option>
      <option value= "Split Air Conditioner Unit" title="Split Air Conditioner Unit">Split Air Conditioner Unit</option>
      <option value= "Stabilizers" title="Stabilizers">Stabilizers</option>
      <option value="Store Issue Voucher" title="Store Issue Voucher">Store Issue Voucher</option>
      <option value="Store Ledgers" title="Store Ledgers">Store Ledgers</option>
      <option value="Store Receipt Voucher Register" title="Store Receipt Voucher Register">Store Receipt Voucher Register</option>
      <option value="Store Receipt Vouchers" title="Store Receipt Vouchers">Store Receipt Vouchers</option>
      <option value="Sub Stores Requisition Form" title="Sub Stores Requisition Form">Sub Stores Requisition Form</option>
      <option value="Tally cards" title="Tally cards">Tally cards</option>
      <option value="Tax Clearance Certificates" title="Tax Clearance Certificates">Tax Clearance Certificates</option>
      <option value="Tax Exemption Certificates" title="Tax Exemption Certificates">Tax Exemption Certificates</option>
      <option value="TIN Registration Form" title="TIN Registration Form">TIN Registration Form</option>
      <option value="Treasury Cash Book Summary" title="Treasury Cash Book Summary">Treasury Cash Book Summary</option>
      <option value="Used Office files and Receipts" title="Used Office files and Receipts">Used Office files and Receipts</option>
      <option value="Vehicle Identification Tags (TSE)" title="Vehicle Identification Tags (TSE)">Vehicle Identification Tags (TSE)</option>
      <option value="Vehicle Licenses" title="Vehicle Licenses">Vehicle Licenses</option>
      <option value="Vehicle Registration Booklet" title="Vehicle Registration Booklet">Vehicle Registration Booklet</option>
      <option value="BIRS 2016 Calendars" title="BIRS 2016 Calendars">BIRS 2016 Calendars</option>
      <option value="BIRS MLA Rates Flex Banners" title="BIRS MLA Rates Flex Banners">BIRS MLA Rates Flex Banners</option>
      <option value="BIRS MLA Rates Notice Boards" title="BIRS MLA Rates Notice Boards">BIRS MLA Rates Notice Boards</option>



    </select></td>
  </tr>
  <tr>
    <td> <label>UNIT PRICE:</label></td>
    <td> <input  width="40" name="unitprice" type="text" maxlength="40" placeholder= "Type Unit Price" required /></td>
  </tr>
  <tr>
    <td><label>SUPPLIER:</label></td>
    <td><input  width="40" name="supplier" type="text" maxlength="40" placeholder= "Type Supplier credentials" required/></td>
  </tr>
  <tr>
    <td><label>QUANTITY RECEIVED:</label></td>
    <td><input  width="40" name="quantity" type="text" maxlength="20" placeholder= "Enter Number of Items" required/></td>
  </tr>

  <tr>
    <td><label>RECEIVING OFFICER:</label></td>
    <td><select name="jumpMenu" id="jumpMenu" width="40" onchange="MM_jumpMenu('parent',this,0)" value = " " required>
    <option> </option>
      <option>STORE OFFICER (ABEL UGBIR)</option>
      <option>STORE OFFICER (JULIUS TYOHEMBA)</option>
      <option>STORE UNIT HEAD (BENNY SHINDI)</option>
      
    </select> </td>
  </tr>
<tr>
    <td> <label>SRV NUMBER:</label></td>
    <td> <input  width="40" name="srv" type="text" maxlength="40" placeholder= "Type SRV Number" required /></td>
  </tr>
  <tr>
    <td><label>DATE:</label></td>
    <td><input  width="40" name="entrydate" id= "date1" type="text" maxlength="6" value="<?php echo date("l d-F-Y");?>" required/>
<script type="text/javascript">
  		calendar.set("date1");
  </script>
</td>
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
    
    <div class="TabbedPanelsContent">REQUISITION FORM FOR OUTGOING ITEMS</br>
    </br>
   
     <form action="requisitionsout.php" method="post" name="Requisitions">
     <table width="600" border="0">
      <tr>
    <td><label>ITEM:</label></td>
    <td><select name="item" id="items" width="60" placeholder="Select an Item" required>
    <option> </option>
      <option value="40 Leaves BIRS Exercise Books" title="40 Leaves BIRS Exercise Books">40 Leaves BIRS Exercise Books</option>
      <option value="Application for Replacement of Number Plate Form" title="Application for Replacement of Number Plate Form">Application for Replacement of Number Plate Form</option>
      <option value= "Authority for Variation in Pay Booklets" title="Authority for Variation in Pay Booklets">Authority for Variation in Pay Booklets</option>
      <option value= "Benue State Financial Instructions 2013" title="Benue State Financial Instructions 2013">Benue State Financial Instructions 2013</option>
      <option value="Benue State Gazette 18th Nov. 2010" title="Benue State Gazette 18th Nov. 2010">Benue State Gazette 18th Nov. 2010</option>
      <option value="Benue State Stores Regulation 2013" title="Benue State Stores Regulation 2013">Benue State Stores Regulation 2013</option>
      <option value="Big Sized Envelops" title="Big Sized Envelops">Big Sized Envelops</option>
      <option value="BIRS Branded 2016 Diaries" title="BIRS Branded 2016 Diaries">BIRS Branded 2016 Diaries</option>
      <option value="BIRS Branded Mugs" title="BIRS Branded Mugs">BIRS Branded Mugs</option>
      <option value="BIRS Branded T-Shirts and Face Caps" title="BIRS Branded T-Shirts and Face Caps">BIRS Branded T-Shirts and Face Caps</option>
      <option value="BIRS ICT Policy Booklet" title="BIRS ICT Policy Booklet">BIRS ICT Policy Booklet</option>
      <option value="BIRS 'Inspection Point' Sign Board" title="BIRS 'Inspection Point' Sign Board">BIRS 'Inspection Point' Sign Board</option>
      <option value="BIRS Mouse pads" title="BIRS Mouse pads">BIRS Mouse pads</option>
      <option value="BIRS stickers" title="BIRS stickers">BIRS stickers</option>
      <option value="BIRS TIN Branded Key holders" title="BIRS TIN Branded Key holders">BIRS TIN Branded Key holders</option>
      <option value="BIRS TIN Branded Wrist Bands" title="BIRS TIN Branded Wrist Bands">BIRS TIN Branded Wrist Bands</option>
      <option value="Change of Vehicle Receipt" title="Change of Vehicle Receipt">Change of Vehicle Receipt</option>
      <option value="Civil Service Annual Performance Report" title="Civil Service Annual Performance Report">Civil Service Annual Performance Report</option>
      <option value="Claim for Mileage" title="Claim for Mileage">Claim for Mileage</option>
      <option value="Confidential Tax Files" title="Confidential Tax Files">Confidential Tax Files</option>
      <option value="Damaged Security Cameras" title="Damaged Security Cameras">Damaged Security Cameras</option>
      <option value="Demand Notice: Development Levy Form (old)" title="Demand Notice: Development Levy Form (old)">Demand Notice: Development Levy Form (old)</option>
      <option value="Departmental Vote Expenditure Booklet" title="Departmental Vote Expenditure Booklet">Departmental Vote Expenditure Booklet</option>
      <option value="Employer Certificate of Pay and Tax Receipt" title="Employer Certificate of Pay and Tax Receipt">Employer Certificate of Pay and Tax Receipt</option>
      <option value="Engraver" title="Engraver">Engraver</option>
      <option value= "File Jackets (Open)" title="File Jackets (Open)">File Jackets (Open)</option>
      <option value= "File Jackets (Secret)" title="File Jackets (Secret)">File Jackets (Secret)</option>
      <option value="Food Basket Post Office Stamps" title="Food Basket Post Office Stamps">Food Basket Post Office Stamps</option>
      <option value="Furniture Distribution Register" title="Furniture Distribution Register">Furniture Distribution Register</option>
      <option value="Ground Rent Fee Demand Notice Booklet" title="Ground Rent Fee Demand Notice Booklet">Ground Rent Fee Demand Notice Booklet</option>
      <option value="Gugur Waterfalls Post Office Stamps" title="Gugur Waterfalls Post Office Stamps">Gugur Waterfalls Post Office Stamps</option>
      <option value="Guide To Administrative Procedure 2013" title="Guide To Administrative Procedure 2013">Guide To Administrative Procedure 2013</option>
      <option value="Hackney Tax Permit Sticker (2013)" title="Hackney Tax Permit Sticker (2013)">Hackney Tax Permit Sticker (2013)</option>
      <option value="Head Pan" title="Head Pan">Head Pan</option>
      <option value="Hotels, etc Consumption Tax Weekly Returns form" title="Hotels, etc Consumption Tax Weekly Returns form">Hotels, etc Consumption Tax Weekly Returns form</option>
      <option value="How To Get Your TIN Poster" title="How To Get Your TIN Poster">How To Get Your TIN Poster</option>
      <option value="Imprest Warrant" title="Imprest Warrant">Imprest Warrant</option>
      <option value="Internal Memo Pad" title="Internal Memo Pad">Internal Memo Pad</option>
      <option value="J.S. Tarka Post Office Stamps" title="J.S. Tarka Post Office Stamps">J.S. Tarka Post Office Stamps</option>
      <option value="Ladder" title="Ladder">Ladder</option>
      <option value="Laserjet 53A Printer Catridge" title="Laserjet 53A Printer Catridge">Laserjet 53A Printer Catridge</option>
      <option value="Learners' Permit Booklets" title="Learners' Permit Booklets">Learners' Permit Booklets</option>
      <option value="Leave Form" title="Leave Form">Leave Form</option>
      <option value="Letter Headed Papers" title="Letter Headed Papers">Letter Headed Papers</option>
      <option value="Letter Headed Papers" title="Letter Headed Papers">Letter Headed Papers</option>
      <option value="Metal Rods for sign posts" title="Metal Rods for sign posts">Metal Rods for sign posts</option>
      <option value="Mini pads" title="Mini pads">Mini pads</option>
      <option value="Motorcycle Vehicle Licenses (2013)" title="Motorcycle Vehicle Licenses (2013)">Motorcycle Vehicle Licenses (2013)</option>
      <option value= "National Vehicle Administration Form" title="National Vehicle Administration Form">National Vehicle Administration Form</option>
      <option value= "Norton 2012 Antivirus" title="Norton 2012 Antivirus">Norton 2012 Antivirus</option>
      <option value="Notice of Assessment Booklets" title="Notice of Assessment Booklets">Notice of Assessment Booklets</option>
      <option value="Old Calendars (2012)" title="Old Calendars (2012)">Old Calendars (2012)</option>
      <option value="Old Plate Numbers" title="Old Plate Numbers">Old Plate Numbers</option>
      <option value="Pay As You Earn System Table Booklet" title="Pay As You Earn System Table Booklet">Pay As You Earn System Table Booklet</option>
      <option value="Payment Treasury Cash Book" title="Payment Treasury Cash Book">Payment Treasury Cash Book</option>
      <option value="Personal Income Tax Booklets" title="Personal Income Tax Booklets">Personal Income Tax Booklets</option>
      <option value="Personal Income Tax Certificate" title="Personal Income Tax Certificate">Personal Income Tax Certificate</option>
      <option value="Personal Income Tax Receipt Booklets" title="Personal Income Tax Receipt Booklets">Personal Income Tax Receipt Booklets</option>
      <option value="Personal Income Tax Receipts" title="Personal Income Tax Receipts">Personal Income Tax Receipts</option>
      <option value="Personal Income Tax Return Form - Form 'A' (New)" title="Personal Income Tax Return Form - Form 'A' (New)">Personal Income Tax Return Form - Form 'A' (New)</option>
      <option value="Personal Income Tax Return Form Form 'A' (Old)" title="Personal Income Tax Return Form Form 'A' (Old)">Personal Income Tax Return Form Form 'A' (Old)</option>
      <option value="Receipt Treasury Cash Book" title="Receipt Treasury Cash Book">Receipt Treasury Cash Book</option>
      <option value="Recommendation for Disciplinary Action Form" title="Recommendation for Disciplinary Action Form">Recommendation for Disciplinary Action Form</option>
      <option value="Seasons Greeting Cards" title="Seasons Greeting Cards">Seasons Greeting Cards</option>
      <option value="Shovel" title="Shovel">Shovel</option>
      <option value="Single Plate Numbers (Motor Vehicle)" title="Single Plate Numbers (Motor Vehicle)">Single Plate Numbers (Motor Vehicle)</option>
      <option value="Single Plate Numbers (Motorcycle)" title="Single Plate Numbers (Motorcycle)">Single Plate Numbers (Motorcycle)</option>
      <option value="Small Size Envelops" title="Small Size Envelops">Small Size Envelops</option>
      <option value="Socket Adapters (big)" title="Socket Adapters (big)">Socket Adapters (big)</option>
      <option value="Socket Adapters (small)" title="Socket Adapters (small)">Socket Adapters (small)</option>
      <option value="Spare Drawer Keys" title="Spare Drawer Keys">Spare Drawer Keys</option>
      <option value= "Split Air Conditioner Unit" title="Split Air Conditioner Unit">Split Air Conditioner Unit</option>
      <option value= "Stabilizers" title="Stabilizers">Stabilizers</option>
      <option value="Store Issue Voucher" title="Store Issue Voucher">Store Issue Voucher</option>
      <option value="Store Ledgers" title="Store Ledgers">Store Ledgers</option>
      <option value="Store Receipt Voucher Register" title="Store Receipt Voucher Register">Store Receipt Voucher Register</option>
      <option value="Store Receipt Vouchers" title="Store Receipt Vouchers">Store Receipt Vouchers</option>
      <option value="Sub Stores Requisition Form" title="Sub Stores Requisition Form">Sub Stores Requisition Form</option>
      <option value="Tally cards" title="Tally cards">Tally cards</option>
      <option value="Tax Clearance Certificates" title="Tax Clearance Certificates">Tax Clearance Certificates</option>
      <option value="Tax Exemption Certificates" title="Tax Exemption Certificates">Tax Exemption Certificates</option>
      <option value="TIN Registration Form" title="TIN Registration Form">TIN Registration Form</option>
      <option value="Treasury Cash Book Summary" title="Treasury Cash Book Summary">Treasury Cash Book Summary</option>
      <option value="Used Office files and Receipts" title="Used Office files and Receipts">Used Office files and Receipts</option>
      <option value="Vehicle Identification Tags (TSE)" title="Vehicle Identification Tags (TSE)">Vehicle Identification Tags (TSE)</option>
      <option value="Vehicle Licenses" title="Vehicle Licenses">Vehicle Licenses</option>
      <option value="Vehicle Registration Booklet" title="Vehicle Registration Booklet">Vehicle Registration Booklet</option>
      <option value="BIRS 2016 Calendars" title="BIRS 2016 Calendars">BIRS 2016 Calendars</option>
      <option value="BIRS MLA Rates Flex Banners" title="BIRS MLA Rates Flex Banners">BIRS MLA Rates Flex Banners</option>
      <option value="BIRS MLA Rates Notice Boards" title="BIRS MLA Rates Notice Boards">BIRS MLA Rates Notice Boards</option>
    </select></td>
  </tr>
  <tr>
    <td> <label>UNIT PRICE:</label></td>
    <td> <input  width="40" name="unitprice1" type="text" maxlength="40" placeholder= "Type Unit Price" required /></td>
  </tr>
<tr>
    <td><label>QUANTITY ISSUED:</label></td>
    <td><input  width="40" name="quantity" type="text" maxlength="6" placeholder= "Enter Number of Items" required/></td>
  </tr>
<tr>
    <td> <label>NAME OF RECEIVING OFFICER:</label></td>
    <td> <input  width="40" name="collect" type="text" maxlength="40" placeholder= "Type item received" required /></td>
  </tr>
  <tr>
    <td><label>DEPT/UNIT OF RECEIVING OFFICER:</label></td>
    <td><input  width="40" name="dept" type="text" maxlength="40" placeholder= "Ente Dept/Unit" required/></td>
  </tr>
  
  <!--<tr>
    <td><label>NO OF LOOSE PCS:</label></td>
    <td><input  width="40" name="nolpcs" type="text" maxlength="6" placeholder= "Enter Number of Items" required/></td>
  </tr>-->
  <tr>
    <td><label>ISSUING OFFICER:</label></td>
    <td><select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)" value = " " required>
    <option> </option>
      <option>STORE OFFICER (ABEL UGBIR)</option>
      <option>STORE OFFICER (JULIUS TYOHEMBA)</option>
      <option>STORE UNIT HEAD (BENNY SHINDI)</option>
    </select> </td>
  </tr>
<tr>
    <td> <label>SIV NUMBER:</label></td>
    <td> <input  width="40" name="siv" type="text" maxlength="40" placeholder= "Type SIV Number" required /></td>
  </tr>
  <tr>
    <td><label>DATE:</label></td>
    <td><input  width="40" name="entrydate" id="date2" type="text" maxlength="6" value="<?php echo date("l  d-F-Y");?>" required/>
<script type="text/javascript">
  		calendar.set("date2");
  </script>
</td>
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
     <table width="444" border="0">
   <tr>
    <td><label>APPBRVIATION:</label></td>
    <td><select name="jumpMenu3" id="abbr" width="40" onchange="loadLGA();" required>
    <option> </option>
      <option value="GMU" title="ADO LOCAL GOVERNMENT">GMU</option>
      <option value="GTU" title="AGATU LOCAL GOVERNMENT">GTU</option>
      <option value= "ALD" title="GWER EAST LOCAL GOVERNMENT">ALD</option>
      <option value= "GKP" title="APA LOCAL GOVERNMENT">GKP</option>
      <option value="BKB" title="BURUKU LOCAL GOVERNMENT">BKB</option>
      <option value="YGJ" title="GUMA LOCAL GOVERNMENT">YJG</option>
      <option value="GBK" title="GBOKO LOCAL GOVERNMENT">GBK</option>
      <option value="KAL" title="KATSINA-ALA LOCAL GOVERNMENT">KAL</option>
      <option value="TSE" title="KONSHISHA LOCAL GOVERNMENT">TSE</option>
      <option value="WDP" title="KWANDE LOCAL GOVERNMENT">WDP</option>
      <option value="GBG" title="LOGO LOCAL GOVERNMENT">GBG</option>
      <option value="MKD" title="MAKURDI LOCAL GOVERNMENT">MKD</option>
      <option value="NAK" title="GWER WEST LOCAL GOVERNMENT">NAK</option>
      <option value="BRT" title="OBI LOCAL GOVERNMENT">BRT</option>
      <option value="BGT" title="OGBADIBO LOCAL GOVERNMENT">BGT</option>
      <option value="DKP" title="OHIMINI LOCAL GOVERNMENT">DKP</option>
      <option value="JUX" title="OJU LOCAL GOVERNMENT">JUX</option>
      <option value="PKG" title="OKPOKWU LOCAL GOVERNMENT">PKG</option>
      <option value="TKP" title="OTUKPO LOCAL GOVERNMENT">TKP</option>
      <option value="WNN" title="TARKA LOCAL GOVERNMENT">WNN</option>
      <option value="UKM" title="UKUM LOCAL GOVERNMENT">UKM</option>
      <option value="SEL" title="USHONGO LOCAL GOVERNMENT">SEL</option>
      <option value="VDY" title="VANDEIKIYA LOCAL GOVERNMENT">VDY</option>
      
    </select></td>
  </tr>
  <tr>
    <td>L.G.A :</td>
    <td> <input name="jumpMenu2" id="lga" type="text" readonly="true" /></td>  
  </tr>
  <tr>
    <td>MV-PRIVATE:</td>
    <td> <input name="mvp" id="mvp" type="text" placeholder="No of Motor Private Numbers" /></td>  
  </tr>
  <tr>
    <td>MV-COMMERCIAL:</td>
    <td> <input name="mvc" id="mvc" type="text" placeholder="No of Motor Commercial Numbers" /></td>  
  </tr>
  <tr>
    <td>MC-PRIVATE:</td>
    <td> <input name="mcp" id="mcp" type="text" placeholder="No of Motorcycle Private Numbers" /></td>  
  </tr>
  <tr>
    <td>MC-COMMERCIAL:</td>
    <td> <input name="mcc" id="mcc" type="text" placeholder="No of Motorcycle Commercial Numbers" /></td>  
  </tr>
  <tr> 
    <td>ARTICULATED:</td>
    <td> <input name="att" id="att" type="text"  placeholder="No of Articulated Numbers"/></td>  
  </tr>
  <tr>
    <td><label>PLATE TYPE:</label></td>
    <td><select name="jumpMenu4" id="jumpMenu" width="40" onchange="MM_jumpMenu('parent',this,0)">
    <option> </option>
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
    <td><label>QUANTITY:</label></td>
    <td><input  width="40" name="quantity1" type="text" maxlength="6" placeholder= "Enter Number of Items" /></td>
  </tr>
  <tr>
    <td><label>PLATE NO RANGE:</label></td>
    <td><input  width="40" name="pnrange" type="text" maxlength="80" placeholder= "Enter Plate No Range" /></td>
  </tr>
  <tr>
    <td><label>RECEIVING OFFICER:</label></td>
    <td><select name="jumpMenu5" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)" placeholder= "--Select an Item--" required>
    <option> </option> 
      <option>STORE OFFICER (ABEL UGBIR)</option>
      <option>STORE OFFICER (JULIUS TYOHEMBA)</option>
      <option>STORE UNIT HEAD (BENNY SHINDI)</option>
    </select> </td>
  </tr>
  <tr>
    <td><label>DATE:</label></td>
    <td><input  width="40" name="entrydate" id="date3" type="text" maxlength="6" value="<?php echo date("l  d-F-Y");?>" required/>
<script type="text/javascript">
  		calendar.set("date3");
  </script>
</td>
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
    <div class="TabbedPanelsContent">
      <p>PLATE NUMBER ISSUANCE FORM</p>
      </br>
    
        <form action="pnout.php" method="post" name="pnumbers">
     <table width="443" border="0">
  <tr>
    <td><label>APPBRVIATION:</label></td>
    <td><select name="jumpMenu7" id="abb11" width="40" onchange="loadLGB();" required>
   <option> </option>
      <option value="GMU" title="ADO LOCAL GOVERNMENT">GMU</option>
      <option value="GTU" title="AGATU LOCAL GOVERNMENT">GTU</option>
      <option value= "ALD" title="GWER EAST LOCAL GOVERNMENT">ALD</option>
      <option value= "GKP" title="APA LOCAL GOVERNMENT">GKP</option>
      <option value="BKB" title="BURUKU LOCAL GOVERNMENT">BKB</option>
      <option value="YGJ" title="GUMA LOCAL GOVERNMENT">YJG</option>
      <option value="GBK" title="GBOKO LOCAL GOVERNMENT">GBK</option>
      <option value="KAL" title="KATSINA-ALA LOCAL GOVERNMENT">KAL</option>
      <option value="TSE" title="KONSHISHA LOCAL GOVERNMENT">TSE</option>
      <option value="WDP" title="KWANDE LOCAL GOVERNMENT">WDP</option>
      <option value="GBG" title="LOGO LOCAL GOVERNMENT">GBG</option>
      <option value="MKD" title="MAKURDI LOCAL GOVERNMENT">MKD</option>
      <option value="NAK" title="GWER WEST LOCAL GOVERNMENT">NAK</option>
      <option value="BRT" title="OBI LOCAL GOVERNMENT">BRT</option>
      <option value="BGT" title="OGBADIBO LOCAL GOVERNMENT">BGT</option>
      <option value="DKP" title="OHIMINI LOCAL GOVERNMENT">DKP</option>
      <option value="JUX" title="OJU LOCAL GOVERNMENT">JUX</option>
      <option value="PKG" title="OKPOKWU LOCAL GOVERNMENT">PKG</option>
      <option value="TKP" title="OTUKPO LOCAL GOVERNMENT">TKP</option>
      <option value="WNN" title="TARKA LOCAL GOVERNMENT">WNN</option>
      <option value="UKM" title="UKUM LOCAL GOVERNMENT">UKM</option>
      <option value="SEL" title="USHONGO LOCAL GOVERNMENT">SEL</option>
      <option value="VDY" title="VANDEIKIYA LOCAL GOVERNMENT">VDY</option>
      
    </select></td>
  </tr>
  <tr>
    <td>L.G.A :</td>
    <td> <input name="jumpMenu6" id="lga22" type="text" readonly="true" /></td>  
  </tr>
  <tr>
    <td>MV-PRIVATE:</td>
    <td> <input name="mvp" id="mvp" type="text" placeholder="No of Motor Private Numbers" /></td>  
  </tr>
  <tr>
    <td>MV-COMMERCIAL:</td>
    <td> <input name="mvc" id="mvc" type="text"  placeholder="No of Motor Commercial Numbers"/></td>  
  </tr>
  <tr>
    <td>MC-PRIVATE:</td>
    <td> <input name="mcp" id="mcp" type="text" placeholder="No of Motorcycle Private Numbers" /></td>  
  </tr>
  <tr>
    <td>MC-COMMERCIAL:</td>
    <td> <input name="mcc" id="mcc" type="text" placeholder="No of Motorcycle Commercial Numbers" /></td>  
  </tr>
  <tr> 
    <td>ARTICULATED:</td>
    <td> <input name="att" id="att" type="text" placeholder="No of Articulated Numbers" /></td>  
  </tr>
  <tr>
    <td><label>PLATE TYPE:</label></td>
    <td><select name="jumpMenu8" id="jumpMenu" width="40" onchange="MM_jumpMenu('parent',this,0)" required>
    <option> </option>
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
    <td><label>QUANTITY:</label></td>
    <td><input  width="40" name="quantity1l" type="text" maxlength="6" placeholder= "Enter Number of Items" required/></td>
  </tr>
  <tr>
    <td><label>PLATE NO RANGE :</label></td>
    <td><input  width="40" name="pnrange" type="text" maxlength="40" placeholder= "Enter Plate No Range" required/></td>
  </tr>
  <tr>
    <td><label>ISSUING OFFICER:</label></td>
    <td><select name="jumpMenu9" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)" placeholder= "--Select an Item--" required>
    <option> </option> 
       <option>--Select One--</option>
      <option>STORE OFFICER (ABEL UGBIR)</option>
      <option>STORE OFFICER (JULIUS TYOHEMBA)</option>
      <option>STORE UNIT HEAD (BENNY SHINDI)</option>
    </select> </td>
  </tr>
  <tr>
    <td><label>REQUESTING OFFICER:</label></td>
    <td><input  width="40" name="rqoff" type="text" maxlength="80" placeholder= "Enter Name of Requesting Officer" required/></td>
  </tr>
  <tr>
    <td><label>RECEIVING OFFICER:</label></td>
    <td><input  width="40" name="rcvoff" type="text" maxlength="80" placeholder= "Enter Name of Receiving Officer" required/></td>
  </tr>
  <tr>
    <td><label>DATE:</label></td>
    <td><input  width="40" name="entrydate" id="date4" type="text" maxlength="6" value="<?php echo date("l  d-F-Y");?>" required/>
<script type="text/javascript">
  		calendar.set("date4");
  </script>
</td>
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
  
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">DATA VIEW</br>
    </br>
   
     <form action="report.php" method="post" name="Requisitions">
     <table width="400" border="0">
 
  <tr>
    <td></td>
    <td><label>PLATE NUMBER SUMMARY</label><br />
    <input name="submit" type="submit" value="REPORT" /></td>
   
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
  
    
    
  
     </form></br>

<!--
      <form action="report2.php" method="post" name="Requisitions">
     <table width="400" border="0">
   <tr>
    <td><label>ITEM:</label></td>
    <td><select name="item" id="items" width="60" placeholder="Select an Item" required>
    <option> </option>
      <option value="40 Leaves BIRS Exercise Books" title="40 Leaves BIRS Exercise Books">40 Leaves BIRS Exercise Books</option>
      <option value="Application for Replacement of Number Plate Form" title="Application for Replacement of Number Plate Form">Application for Replacement of Number Plate Form</option>
      <option value= "Authority for Variation in Pay Booklets" title="Authority for Variation in Pay Booklets">Authority for Variation in Pay Booklets</option>
      <option value= "Benue State Financial Instructions 2013" title="Benue State Financial Instructions 2013">Benue State Financial Instructions 2013</option>
      <option value="Benue State Gazette 18th Nov. 2010" title="Benue State Gazette 18th Nov. 2010">Benue State Gazette 18th Nov. 2010</option>
      <option value="Benue State Stores Regulation 2013" title="Benue State Stores Regulation 2013">Benue State Stores Regulation 2013</option>
      <option value="Big Sized Envelops" title="Big Sized Envelops">Big Sized Envelops</option>
      <option value="BIRS Branded 2016 Diaries" title="BIRS Branded 2016 Diaries">BIRS Branded 2016 Diaries</option>
      <option value="BIRS Branded Mugs" title="BIRS Branded Mugs">BIRS Branded Mugs</option>
      <option value="BIRS Branded T-Shirts and Face Caps" title="BIRS Branded T-Shirts and Face Caps">BIRS Branded T-Shirts and Face Caps</option>
      <option value="BIRS ICT Policy Booklet" title="BIRS ICT Policy Booklet">BIRS ICT Policy Booklet</option>
      <option value="BIRS 'Inspection Point' Sign Board" title="BIRS 'Inspection Point' Sign Board">BIRS 'Inspection Point' Sign Board</option>
      <option value="BIRS Mouse pads" title="BIRS Mouse pads">BIRS Mouse pads</option>
      <option value="BIRS stickers" title="BIRS stickers">BIRS stickers</option>
      <option value="BIRS TIN Branded Key holders" title="BIRS TIN Branded Key holders">BIRS TIN Branded Key holders</option>
      <option value="BIRS TIN Branded Wrist Bands" title="BIRS TIN Branded Wrist Bands">BIRS TIN Branded Wrist Bands</option>
      <option value="Change of Vehicle Receipt" title="Change of Vehicle Receipt">Change of Vehicle Receipt</option>
      <option value="Civil Service Annual Performance Report" title="Civil Service Annual Performance Report">Civil Service Annual Performance Report</option>
      <option value="Claim for Mileage" title="Claim for Mileage">Claim for Mileage</option>
      <option value="Confidential Tax Files" title="Confidential Tax Files">Confidential Tax Files</option>
      <option value="Damaged Security Cameras" title="Damaged Security Cameras">Damaged Security Cameras</option>
      <option value="Demand Notice: Development Levy Form (old)" title="Demand Notice: Development Levy Form (old)">Demand Notice: Development Levy Form (old)</option>
      <option value="Departmental Vote Expenditure Booklet" title="Departmental Vote Expenditure Booklet">Departmental Vote Expenditure Booklet</option>
      <option value="Employer Certificate of Pay and Tax Receipt" title="Employer Certificate of Pay and Tax Receipt">Employer Certificate of Pay and Tax Receipt</option>
      <option value="Engraver" title="Engraver">Engraver</option>
      <option value= "File Jackets (Open)" title="File Jackets (Open)">File Jackets (Open)</option>
      <option value= "File Jackets (Secret)" title="File Jackets (Secret)">File Jackets (Secret)</option>
      <option value="Food Basket Post Office Stamps" title="Food Basket Post Office Stamps">Food Basket Post Office Stamps</option>
      <option value="Furniture Distribution Register" title="Furniture Distribution Register">Furniture Distribution Register</option>
      <option value="Ground Rent Fee Demand Notice Booklet" title="Ground Rent Fee Demand Notice Booklet">Ground Rent Fee Demand Notice Booklet</option>
      <option value="Gugur Waterfalls Post Office Stamps" title="Gugur Waterfalls Post Office Stamps">Gugur Waterfalls Post Office Stamps</option>
      <option value="Guide To Administrative Procedure 2013" title="Guide To Administrative Procedure 2013">Guide To Administrative Procedure 2013</option>
      <option value="Hackney Tax Permit Sticker (2013)" title="Hackney Tax Permit Sticker (2013)">Hackney Tax Permit Sticker (2013)</option>
      <option value="Head Pan" title="Head Pan">Head Pan</option>
      <option value="Hotels, etc Consumption Tax Weekly Returns form" title="Hotels, etc Consumption Tax Weekly Returns form">Hotels, etc Consumption Tax Weekly Returns form</option>
      <option value="How To Get Your TIN Poster" title="How To Get Your TIN Poster">How To Get Your TIN Poster</option>
      <option value="Imprest Warrant" title="Imprest Warrant">Imprest Warrant</option>
      <option value="Internal Memo Pad" title="Internal Memo Pad">Internal Memo Pad</option>
      <option value="J.S. Tarka Post Office Stamps" title="J.S. Tarka Post Office Stamps">J.S. Tarka Post Office Stamps</option>
      <option value="Ladder" title="Ladder">Ladder</option>
      <option value="Laserjet 53A Printer Catridge" title="Laserjet 53A Printer Catridge">Laserjet 53A Printer Catridge</option>
      <option value="Learners' Permit Booklets" title="Learners' Permit Booklets">Learners' Permit Booklets</option>
      <option value="Leave Form" title="Leave Form">Leave Form</option>
      <option value="Letter Headed Papers" title="Letter Headed Papers">Letter Headed Papers</option>
      <option value="Letter Headed Papers" title="Letter Headed Papers">Letter Headed Papers</option>
      <option value="Metal Rods for sign posts" title="Metal Rods for sign posts">Metal Rods for sign posts</option>
      <option value="Mini pads" title="Mini pads">Mini pads</option>
      <option value="Motorcycle Vehicle Licenses (2013)" title="Motorcycle Vehicle Licenses (2013)">Motorcycle Vehicle Licenses (2013)</option>
      <option value= "National Vehicle Administration Form" title="National Vehicle Administration Form">National Vehicle Administration Form</option>
      <option value= "Norton 2012 Antivirus" title="Norton 2012 Antivirus">Norton 2012 Antivirus</option>
      <option value="Notice of Assessment Booklets" title="Notice of Assessment Booklets">Notice of Assessment Booklets</option>
      <option value="Old Calendars (2012)" title="Old Calendars (2012)">Old Calendars (2012)</option>
      <option value="Old Plate Numbers" title="Old Plate Numbers">Old Plate Numbers</option>
      <option value="Pay As You Earn System Table Booklet" title="Pay As You Earn System Table Booklet">Pay As You Earn System Table Booklet</option>
      <option value="Payment Treasury Cash Book" title="Payment Treasury Cash Book">Payment Treasury Cash Book</option>
      <option value="Personal Income Tax Booklets" title="Personal Income Tax Booklets">Personal Income Tax Booklets</option>
      <option value="Personal Income Tax Certificate" title="Personal Income Tax Certificate">Personal Income Tax Certificate</option>
      <option value="Personal Income Tax Receipt Booklets" title="Personal Income Tax Receipt Booklets">Personal Income Tax Receipt Booklets</option>
      <option value="Personal Income Tax Receipts" title="Personal Income Tax Receipts">Personal Income Tax Receipts</option>
      <option value="Personal Income Tax Return Form - Form 'A' (New)" title="Personal Income Tax Return Form - Form 'A' (New)">Personal Income Tax Return Form - Form 'A' (New)</option>
      <option value="Personal Income Tax Return Form Form 'A' (Old)" title="Personal Income Tax Return Form Form 'A' (Old)">Personal Income Tax Return Form Form 'A' (Old)</option>
      <option value="Receipt Treasury Cash Book" title="Receipt Treasury Cash Book">Receipt Treasury Cash Book</option>
      <option value="Recommendation for Disciplinary Action Form" title="Recommendation for Disciplinary Action Form">Recommendation for Disciplinary Action Form</option>
      <option value="Seasons Greeting Cards" title="Seasons Greeting Cards">Seasons Greeting Cards</option>
      <option value="Shovel" title="Shovel">Shovel</option>
      <option value="Single Plate Numbers (Motor Vehicle)" title="Single Plate Numbers (Motor Vehicle)">Single Plate Numbers (Motor Vehicle)</option>
      <option value="Single Plate Numbers (Motorcycle)" title="Single Plate Numbers (Motorcycle)">Single Plate Numbers (Motorcycle)</option>
      <option value="Small Size Envelops" title="Small Size Envelops">Small Size Envelops</option>
      <option value="Socket Adapters (big)" title="Socket Adapters (big)">Socket Adapters (big)</option>
      <option value="Socket Adapters (small)" title="Socket Adapters (small)">Socket Adapters (small)</option>
      <option value="Spare Drawer Keys" title="Spare Drawer Keys">Spare Drawer Keys</option>
      <option value= "Split Air Conditioner Unit" title="Split Air Conditioner Unit">Split Air Conditioner Unit</option>
      <option value= "Stabilizers" title="Stabilizers">Stabilizers</option>
      <option value="Store Issue Voucher" title="Store Issue Voucher">Store Issue Voucher</option>
      <option value="Store Ledgers" title="Store Ledgers">Store Ledgers</option>
      <option value="Store Receipt Voucher Register" title="Store Receipt Voucher Register">Store Receipt Voucher Register</option>
      <option value="Store Receipt Vouchers" title="Store Receipt Vouchers">Store Receipt Vouchers</option>
      <option value="Sub Stores Requisition Form" title="Sub Stores Requisition Form">Sub Stores Requisition Form</option>
      <option value="Tally cards" title="Tally cards">Tally cards</option>
      <option value="Tax Clearance Certificates" title="Tax Clearance Certificates">Tax Clearance Certificates</option>
      <option value="Tax Exemption Certificates" title="Tax Exemption Certificates">Tax Exemption Certificates</option>
      <option value="TIN Registration Form" title="TIN Registration Form">TIN Registration Form</option>
      <option value="Treasury Cash Book Summary" title="Treasury Cash Book Summary">Treasury Cash Book Summary</option>
      <option value="Used Office files and Receipts" title="Used Office files and Receipts">Used Office files and Receipts</option>
      <option value="Vehicle Identification Tags (TSE)" title="Vehicle Identification Tags (TSE)">Vehicle Identification Tags (TSE)</option>
      <option value="Vehicle Licenses" title="Vehicle Licenses">Vehicle Licenses</option>
      <option value="Vehicle Registration Booklet" title="Vehicle Registration Booklet">Vehicle Registration Booklet</option>
<option value="BIRS 2016 Calendars" title="BIRS 2016 Calendars">BIRS 2016 Calendars</option>
      <option value="BIRS MLA Rates Flex Banners" title="BIRS MLA Rates Flex Banners">BIRS MLA Rates Flex Banners</option>
      <option value="BIRS MLA Rates Notice Boards" title="BIRS MLA Rates Notice Boards">BIRS MLA Rates Notice Boards</option>
    </select></td>
  </tr>
  <tr>
    <td></td>
    <td><input name="submit" type="submit" value="REPORT" /></td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
  
    
    
  
     </form>

-->

 <form action="pinvreports.php" method="post" name="reports">
     <table width="600" border="0">
     <tr><th>Plate Number Inventry Report.</th></tr>
 <tr>
<td>
<input name="startdate" id = "startdate" placeholder ="yyyy-mm-dd (Start Date)"type="text" required/>
<script type="text/javascript">
  		calendar.set("startdate");
  </script>
</td>
<td> -To-
</td>
<td>
<input name="stopdate" id = "stopdate" placeholder ="yyyy-mm-dd (Stop Date)"type="text" required/>
<script type="text/javascript">
  		calendar.set("stopdate");
  </script>
</td>
 </tr>
 <tr>
 <td>
  <input type="submit" name="submit" id= "go_button" value="Report" onclick="MM_jumpMenuGo('jumpMenu','parent',0)" />
 </td>
 </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
     </form></br>
     
     
       <form action="pisreports.php" method="post" name="reports">
     <table width="600" border="0">
     <tr><th>Plate Number Issued Report.</th></tr>
 <tr>
<td>
<input name="statdate" id = "statdate" placeholder ="yyyy-mm-dd (Stop Date)"type="text" required />
<script type="text/javascript">
  		calendar.set("statdate");
  </script>
</td>
<td> -To-
</td>
<td>
<input name="stpdate" id = "stpdate" placeholder ="yyyy-mm-dd (Stop Date)"type="text" required />
<script type="text/javascript">
  		calendar.set("stpdate");
  </script>
</td>
 </tr>
 <tr>
 <td>
  <input type="submit" name="submit" id= "go_button" value="Report" onclick="MM_jumpMenuGo('jumpMenu','parent',0)" />
 </td>
 </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
     </form><br/>


<!--

<form action="storeinvreports.php" method="post" name="reports">
     <table width="600" border="0">
     <tr><th>Store Items Inventry Report.</th></tr>
 <tr>
<td>
<input name="startdate" id = "startdate" placeholder ="yyyy-mm-dd (Start Date)"type="text" required/>
<script type="text/javascript">
  		calendar.set("startdate");
  </script>
</td>
<td> -To-
</td>
<td>
<input name="stopdate" id = "stopdate" placeholder ="yyyy-mm-dd (Stop Date)"type="text" required/>
<script type="text/javascript">
  		calendar.set("stopdate");
  </script>
</td>
 </tr>
 <tr>
 <td>
  <input type="submit" name="submit" id= "go_button" value="Report" onclick="MM_jumpMenuGo('jumpMenu','parent',0)" />
 </td>
 </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
     </form></br>
<form action="storeoutvreports.php" method="post" name="reports">
     <table width="600" border="0">
     <tr><th>Store Items Outgoing Inventry Report.</th></tr>
 <tr>
<td>
<input name="startdate" id = "startdate" placeholder ="yyyy-mm-dd (Start Date)"type="text" required/>
</td>
<td> -To-
</td>
<td>
<input name="stopdate" id = "stopdate" placeholder ="yyyy-mm-dd (Stop Date)"type="text" required/>
</td>
 </tr>
 <tr>
 <td>
  <input type="submit" name="submit" id= "go_button" value="Report" onclick="MM_jumpMenuGo('jumpMenu','parent',0)" />
 </td>
 </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
     </form>

-->

</br>
    </div>
</div>


<div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">STORE REPORTS</br>
    </br>
   <!--  
     <form action="report.php" method="post" name="Requisitions">
     <table width="400" border="0">
 
<tr>
    <td></td>
    <td><label>PLATE NUMBER SUMMARY</label><br />
    <input name="submit" type="submit" value="REPORT" /></td>
   
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
  
    
  
     </form></br>


 -->


      <form action="report2.php" method="post" name="Requisitions">
     <table width="400" border="0">
   <tr>
    <td><label>ITEM:</label></td>
    <td><select name="item" id="items" width="60" placeholder="Select an Item" required>
    <option> </option>
      <option value="40 Leaves BIRS Exercise Books" title="40 Leaves BIRS Exercise Books">40 Leaves BIRS Exercise Books</option>
      <option value="Application for Replacement of Number Plate Form" title="Application for Replacement of Number Plate Form">Application for Replacement of Number Plate Form</option>
      <option value= "Authority for Variation in Pay Booklets" title="Authority for Variation in Pay Booklets">Authority for Variation in Pay Booklets</option>
      <option value= "Benue State Financial Instructions 2013" title="Benue State Financial Instructions 2013">Benue State Financial Instructions 2013</option>
      <option value="Benue State Gazette 18th Nov. 2010" title="Benue State Gazette 18th Nov. 2010">Benue State Gazette 18th Nov. 2010</option>
      <option value="Benue State Stores Regulation 2013" title="Benue State Stores Regulation 2013">Benue State Stores Regulation 2013</option>
      <option value="Big Sized Envelops" title="Big Sized Envelops">Big Sized Envelops</option>
      <option value="BIRS Branded 2016 Diaries" title="BIRS Branded 2016 Diaries">BIRS Branded 2016 Diaries</option>
      <option value="BIRS Branded Mugs" title="BIRS Branded Mugs">BIRS Branded Mugs</option>
      <option value="BIRS Branded T-Shirts and Face Caps" title="BIRS Branded T-Shirts and Face Caps">BIRS Branded T-Shirts and Face Caps</option>
      <option value="BIRS ICT Policy Booklet" title="BIRS ICT Policy Booklet">BIRS ICT Policy Booklet</option>
      <option value="BIRS 'Inspection Point' Sign Board" title="BIRS 'Inspection Point' Sign Board">BIRS 'Inspection Point' Sign Board</option>
      <option value="BIRS Mouse pads" title="BIRS Mouse pads">BIRS Mouse pads</option>
      <option value="BIRS stickers" title="BIRS stickers">BIRS stickers</option>
      <option value="BIRS TIN Branded Key holders" title="BIRS TIN Branded Key holders">BIRS TIN Branded Key holders</option>
      <option value="BIRS TIN Branded Wrist Bands" title="BIRS TIN Branded Wrist Bands">BIRS TIN Branded Wrist Bands</option>
      <option value="Change of Vehicle Receipt" title="Change of Vehicle Receipt">Change of Vehicle Receipt</option>
      <option value="Civil Service Annual Performance Report" title="Civil Service Annual Performance Report">Civil Service Annual Performance Report</option>
      <option value="Claim for Mileage" title="Claim for Mileage">Claim for Mileage</option>
      <option value="Confidential Tax Files" title="Confidential Tax Files">Confidential Tax Files</option>
      <option value="Damaged Security Cameras" title="Damaged Security Cameras">Damaged Security Cameras</option>
      <option value="Demand Notice: Development Levy Form (old)" title="Demand Notice: Development Levy Form (old)">Demand Notice: Development Levy Form (old)</option>
      <option value="Departmental Vote Expenditure Booklet" title="Departmental Vote Expenditure Booklet">Departmental Vote Expenditure Booklet</option>
      <option value="Employer Certificate of Pay and Tax Receipt" title="Employer Certificate of Pay and Tax Receipt">Employer Certificate of Pay and Tax Receipt</option>
      <option value="Engraver" title="Engraver">Engraver</option>
      <option value= "File Jackets (Open)" title="File Jackets (Open)">File Jackets (Open)</option>
      <option value= "File Jackets (Secret)" title="File Jackets (Secret)">File Jackets (Secret)</option>
      <option value="Food Basket Post Office Stamps" title="Food Basket Post Office Stamps">Food Basket Post Office Stamps</option>
      <option value="Furniture Distribution Register" title="Furniture Distribution Register">Furniture Distribution Register</option>
      <option value="Ground Rent Fee Demand Notice Booklet" title="Ground Rent Fee Demand Notice Booklet">Ground Rent Fee Demand Notice Booklet</option>
      <option value="Gugur Waterfalls Post Office Stamps" title="Gugur Waterfalls Post Office Stamps">Gugur Waterfalls Post Office Stamps</option>
      <option value="Guide To Administrative Procedure 2013" title="Guide To Administrative Procedure 2013">Guide To Administrative Procedure 2013</option>
      <option value="Hackney Tax Permit Sticker (2013)" title="Hackney Tax Permit Sticker (2013)">Hackney Tax Permit Sticker (2013)</option>
      <option value="Head Pan" title="Head Pan">Head Pan</option>
      <option value="Hotels, etc Consumption Tax Weekly Returns form" title="Hotels, etc Consumption Tax Weekly Returns form">Hotels, etc Consumption Tax Weekly Returns form</option>
      <option value="How To Get Your TIN Poster" title="How To Get Your TIN Poster">How To Get Your TIN Poster</option>
      <option value="Imprest Warrant" title="Imprest Warrant">Imprest Warrant</option>
      <option value="Internal Memo Pad" title="Internal Memo Pad">Internal Memo Pad</option>
      <option value="J.S. Tarka Post Office Stamps" title="J.S. Tarka Post Office Stamps">J.S. Tarka Post Office Stamps</option>
      <option value="Ladder" title="Ladder">Ladder</option>
      <option value="Laserjet 53A Printer Catridge" title="Laserjet 53A Printer Catridge">Laserjet 53A Printer Catridge</option>
      <option value="Learners' Permit Booklets" title="Learners' Permit Booklets">Learners' Permit Booklets</option>
      <option value="Leave Form" title="Leave Form">Leave Form</option>
      <option value="Letter Headed Papers" title="Letter Headed Papers">Letter Headed Papers</option>
      <option value="Letter Headed Papers" title="Letter Headed Papers">Letter Headed Papers</option>
      <option value="Metal Rods for sign posts" title="Metal Rods for sign posts">Metal Rods for sign posts</option>
      <option value="Mini pads" title="Mini pads">Mini pads</option>
      <option value="Motorcycle Vehicle Licenses (2013)" title="Motorcycle Vehicle Licenses (2013)">Motorcycle Vehicle Licenses (2013)</option>
      <option value= "National Vehicle Administration Form" title="National Vehicle Administration Form">National Vehicle Administration Form</option>
      <option value= "Norton 2012 Antivirus" title="Norton 2012 Antivirus">Norton 2012 Antivirus</option>
      <option value="Notice of Assessment Booklets" title="Notice of Assessment Booklets">Notice of Assessment Booklets</option>
      <option value="Old Calendars (2012)" title="Old Calendars (2012)">Old Calendars (2012)</option>
      <option value="Old Plate Numbers" title="Old Plate Numbers">Old Plate Numbers</option>
      <option value="Pay As You Earn System Table Booklet" title="Pay As You Earn System Table Booklet">Pay As You Earn System Table Booklet</option>
      <option value="Payment Treasury Cash Book" title="Payment Treasury Cash Book">Payment Treasury Cash Book</option>
      <option value="Personal Income Tax Booklets" title="Personal Income Tax Booklets">Personal Income Tax Booklets</option>
      <option value="Personal Income Tax Certificate" title="Personal Income Tax Certificate">Personal Income Tax Certificate</option>
      <option value="Personal Income Tax Receipt Booklets" title="Personal Income Tax Receipt Booklets">Personal Income Tax Receipt Booklets</option>
      <option value="Personal Income Tax Receipts" title="Personal Income Tax Receipts">Personal Income Tax Receipts</option>
      <option value="Personal Income Tax Return Form - Form 'A' (New)" title="Personal Income Tax Return Form - Form 'A' (New)">Personal Income Tax Return Form - Form 'A' (New)</option>
      <option value="Personal Income Tax Return Form Form 'A' (Old)" title="Personal Income Tax Return Form Form 'A' (Old)">Personal Income Tax Return Form Form 'A' (Old)</option>
      <option value="Receipt Treasury Cash Book" title="Receipt Treasury Cash Book">Receipt Treasury Cash Book</option>
      <option value="Recommendation for Disciplinary Action Form" title="Recommendation for Disciplinary Action Form">Recommendation for Disciplinary Action Form</option>
      <option value="Seasons Greeting Cards" title="Seasons Greeting Cards">Seasons Greeting Cards</option>
      <option value="Shovel" title="Shovel">Shovel</option>
      <option value="Single Plate Numbers (Motor Vehicle)" title="Single Plate Numbers (Motor Vehicle)">Single Plate Numbers (Motor Vehicle)</option>
      <option value="Single Plate Numbers (Motorcycle)" title="Single Plate Numbers (Motorcycle)">Single Plate Numbers (Motorcycle)</option>
      <option value="Small Size Envelops" title="Small Size Envelops">Small Size Envelops</option>
      <option value="Socket Adapters (big)" title="Socket Adapters (big)">Socket Adapters (big)</option>
      <option value="Socket Adapters (small)" title="Socket Adapters (small)">Socket Adapters (small)</option>
      <option value="Spare Drawer Keys" title="Spare Drawer Keys">Spare Drawer Keys</option>
      <option value= "Split Air Conditioner Unit" title="Split Air Conditioner Unit">Split Air Conditioner Unit</option>
      <option value= "Stabilizers" title="Stabilizers">Stabilizers</option>
      <option value="Store Issue Voucher" title="Store Issue Voucher">Store Issue Voucher</option>
      <option value="Store Ledgers" title="Store Ledgers">Store Ledgers</option>
      <option value="Store Receipt Voucher Register" title="Store Receipt Voucher Register">Store Receipt Voucher Register</option>
      <option value="Store Receipt Vouchers" title="Store Receipt Vouchers">Store Receipt Vouchers</option>
      <option value="Sub Stores Requisition Form" title="Sub Stores Requisition Form">Sub Stores Requisition Form</option>
      <option value="Tally cards" title="Tally cards">Tally cards</option>
      <option value="Tax Clearance Certificates" title="Tax Clearance Certificates">Tax Clearance Certificates</option>
      <option value="Tax Exemption Certificates" title="Tax Exemption Certificates">Tax Exemption Certificates</option>
      <option value="TIN Registration Form" title="TIN Registration Form">TIN Registration Form</option>
      <option value="Treasury Cash Book Summary" title="Treasury Cash Book Summary">Treasury Cash Book Summary</option>
      <option value="Used Office files and Receipts" title="Used Office files and Receipts">Used Office files and Receipts</option>
      <option value="Vehicle Identification Tags (TSE)" title="Vehicle Identification Tags (TSE)">Vehicle Identification Tags (TSE)</option>
      <option value="Vehicle Licenses" title="Vehicle Licenses">Vehicle Licenses</option>
      <option value="Vehicle Registration Booklet" title="Vehicle Registration Booklet">Vehicle Registration Booklet</option>
<option value="BIRS 2016 Calendars" title="BIRS 2016 Calendars">BIRS 2016 Calendars</option>
      <option value="BIRS MLA Rates Flex Banners" title="BIRS MLA Rates Flex Banners">BIRS MLA Rates Flex Banners</option>
      <option value="BIRS MLA Rates Notice Boards" title="BIRS MLA Rates Notice Boards">BIRS MLA Rates Notice Boards</option>
    </select></td>
  </tr>
  <tr>
    <td></td>
    <td><input name="submit" type="submit" value="REPORT" /></td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
  
     </form>


 <!-- 

 <form action="pinvreports.php" method="post" name="reports">
     <table width="600" border="0">
     <tr><th>Plate Number Inventry Report.</th></tr>
 <tr>
<td>
<input name="startdate" id = "startdate" placeholder ="yyyy-mm-dd (Start Date)"type="text" required/>
</td>
<td> -To-
</td>
<td>
<input name="stopdate" id = "stopdate" placeholder ="yyyy-mm-dd (Stop Date)"type="text" required/>
</td>
 </tr>
 <tr>
 <td>
  <input type="submit" name="submit" id= "go_button" value="Report" onclick="MM_jumpMenuGo('jumpMenu','parent',0)" />
 </td>
 </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
     </form></br>
     
     
       <form action="pisreports.php" method="post" name="reports">
     <table width="600" border="0">
     <tr><th>Plate Number Issued Report.</th></tr>
 <tr>
<td>
<input name="statdate" id = "statdate" placeholder ="yyyy-mm-dd (Stop Date)"type="text" required />
</td>
<td> -To-
</td>
<td>
<input name="stpdate" id = "stpdate" placeholder ="yyyy-mm-dd (Stop Date)"type="text" required />
</td>
 </tr>
 <tr>
 <td>
  <input type="submit" name="submit" id= "go_button" value="Report" onclick="MM_jumpMenuGo('jumpMenu','parent',0)" />
 </td>
 </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
     </form><br/> 

-->

<form action="storeinvreports.php" method="post" name="reports">
     <table width="600" border="0">
     <tr><th>Store Items Inventry Report.</th></tr>
 <tr>
<td>
<input name="startdate" id = "startdate1" placeholder ="yyyy-mm-dd (Start Date)"type="text" required/>
<script type="text/javascript">
  		calendar.set("startdate1");
  </script>
</td>
<td> -To-
</td>
<td>
<input name="stopdate" id = "stopdate1" placeholder ="yyyy-mm-dd (Stop Date)"type="text" required/>
<script type="text/javascript">
  		calendar.set("stopdate1");
  </script>
</td>
 </tr>
 <tr>
 <td>
  <input type="submit" name="submit" id= "go_button" value="Report" onclick="MM_jumpMenuGo('jumpMenu','parent',0)" />
 </td>
 </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
     </form></br>
<form action="storeoutvreports.php" method="post" name="reports">
     <table width="600" border="0">
     <tr><th>Store Items Outgoing Inventry Report.</th></tr>
 <tr>
<td>
<input name="startdate" id = "startdate2" placeholder ="yyyy-mm-dd (Start Date)"type="text" required/>
<script type="text/javascript">
  		calendar.set("startdate2");
  </script>
</td>
<td> -To-
</td>
<td>
<input name="stopdate" id = "stopdate2" placeholder ="yyyy-mm-dd (Stop Date)"type="text" required/>
<script type="text/javascript">
  		calendar.set("stopdate2");
  </script>
</td>
 </tr>
 <tr>
 <td>
  <input type="submit" name="submit" id= "go_button" value="Report" onclick="MM_jumpMenuGo('jumpMenu','parent',0)" />
 </td>
 </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
     </form></br>
    </div>
</div>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
</body>
</html>
