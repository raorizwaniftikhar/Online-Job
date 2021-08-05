<?php
session_start();
if(!(isset($_SESSION["admin"])))
{
header("location:adminlogin.html");
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Employers</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
<!--
.style2 {
	color: #3399FF;
	font-weight: bold;
}
.style3 {
	color: #6699FF;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td  width="100%" height="40%">&nbsp;</td>
</tr>
<tr>
<td align="right" valign="bottom">Email: <a href="mailto:abc@yoursite.com" style="color:#333333; text-decoration:none;"> Mobile:+92-302-7477137<br /> 
            contact@joblink.com</a></td>
</tr>
<tr>
 <td height="65" align="left" valign="top">
              <img src="images/logo.jpg" alt="Company Logo" width="130" height="76" /> </td>
  </tr>
    <tr>
<td  width="100%" height="40%">&nbsp;</td>
</tr>
    			    <tr>
   <td style="white-space:pre; font-size:12px; color:#601E29; color:#B46471;" height="23"  align="right" valign="middle" bgcolor="#FFEEF2"><a href="index.php" class="footer_link">HOME</a> | <a href="about.html" class="footer_link">About us </a> | <a href="contact.html" class="footer_link">Contact us </a> |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php" class="footer_link"><strong>Log out</strong> </a></td>
  </tr>
<tr>
<td width="100%" align="center" valign="top"><img src="images/header_bg.jpg" alt="Wasim here" width="964" height="170"  border="0" /></td>
</tr>
  <tr>
    <td align="center" valign="top"><table width="741" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top"></td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="168" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
                <td height="26" align="left" valign="top">&nbsp;</td>
              </tr>
			  <tr>
                <td height="26" align="left" valign="top">&nbsp;</td>
              </tr><tr>
                <td height="26" align="left" valign="top">&nbsp;</td>
              </tr>
			 <tr>
                <td height="27" align="left" valign="middle"><a href="index.html" class="left_link" style="color:#41A9E8;">HOME</a></td>
              </tr>
            
              <tr>
                <td height="27" align="left" valign="middle"><a href="viewuser.php" class="left_link">View JobSeekers </a><a href="adminlogin.html" class="left_link"></a></td>
              </tr>
              <tr>
                <td height="27" align="left" valign="middle"><a href="viewcompany.php" class="left_link">View Employer</a><a href="login.html" class="left_link">s</a></td>
              </tr>
              <tr>
                <td height="27" align="left" valign="middle"><a href="viewjob.php" class="left_link">View jobs </a></td>
              </tr>
              <tr>
                <td height="27" align="left" valign="middle"><a href="contact.html" class="left_link">Contacts</a></td>
              </tr>
             
            </table></td>
            <td align="left" valign="top"><table width="573" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="26" align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="center" valign="middle" bgcolor="#3997DD" style="font-size:10px; color:#FFF;">View Employers </td>
                </tr>
              <tr>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top" style="text-align:justify;">
<?php

include("connection.php");
$sql="select * from company";
$record=mysql_query($sql);

echo "<table width='50%'  border='1' bgcolor='#FFFFFF' align='center'>";
	echo "<tr bgcolor='#CCCCCC'>
             <td colspan='7'><div align='center'><strong>Modify company  </strong></div></td>
              </tr>";
            
		echo "<tr bgcolor='#CCCCCC'>
		
		
		<th>company_name</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Address</th>
		<th>industry</th>
		<th>Delete</th>
		<th>update</th>
		</tr>";
while($row=mysql_fetch_array($record))
{
$id=$row['company_id'];
$ph=$row['phone'];
$c_name=$row['c_name'];
$mail=$row['mail_id'];
$ad=$row['address'];
$indus=$row['industry'];


		echo "<tr bgcolor='#6699FF'>
		<td>$c_name</td>
		<td>$ph</td>
		<td>$mail</td>
		<td>$ad</td>
		<td>$indus</td>
		<td> <a href=delcompany.php?cid=$id>Delete </a></td>
		<td><a href=updatecompany.php?cid=$id>Edit </a></td>
		</tr>";
		
		}
		echo"</table>";
?>
  
    
				
				</td></tr>
             
              
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="740" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="6" rowspan="2" align="left" valign="top">&nbsp;</td>
            <td style="white-space:pre; font-size:12px; color:#601E29; color:#B46471;" height="23" colspan="2" align="center" valign="middle" bgcolor="#FFEEF2"><a href="index.html" class="footer_link">HOME</a> | <a href="about.html" class="footer_link">About us </a> | <a href="contact.html" class="footer_link">Contact us </a></td>
            <td width="10" rowspan="2" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="497" align="right" valign="top" class="footer_left_bg">Copyright &copy; Muhammad Toqeer 2014</td>

            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
}

?>