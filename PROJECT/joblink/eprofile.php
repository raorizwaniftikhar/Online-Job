<?php
session_start();
if(!(isset($_SESSION["currentuser"])))
{
header("location:employer.html");
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Employer Profile </title>
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
<td align="right" valign="bottom"><a href="mailto:abc@yoursite.com" style="color:#333333; text-decoration:none;"> Mobile:+92-346-7477137<br /> 
    Email:contact@joblink.com</a></td>
</tr>
<tr>
 <td height="65" align="left" valign="top">
              <img src="images/logo.jpg" alt="Company Logo" width="144" height="56" /> </td>
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
            <td width="168" align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="26" align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td height="26" align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td height="26" align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td height="27" align="left" valign="middle"><a href="index.php" class="left_link" style="color:#41A9E8;">HOME</a></td>
              </tr>
              <tr>
                <td height="27" align="left" valign="middle"><a href="about.html" class="left_link">About us </a></td>
              </tr>             
              <tr>
                <td height="27" align="left" valign="middle"><a href="jobseeker.html" class="left_link">Job Seeker </a></td>
              </tr>
              <tr>
                <td height="27" align="left" valign="middle"><a href="employer.html" class="left_link">Employer</a></td>
              </tr>
			   <tr>
                <td height="27" align="left" valign="middle"><a href="addjob.php" class="left_link">Post New job</a><a href="employer.html" class="left_link"></a></td>
              </tr>
			   <tr>
                <td height="27" align="left" valign="middle"><a href="eprofile.php" class="left_link">My Profile </a></td>
              </tr>
			      <tr>
                <td height="27" align="left" valign="middle"><a href="RssReader.html" class="left_link">Rss News</a></td>
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
                <td align="center" valign="middle" bgcolor="#3997DD" style="font-size:10px; color:#FFF;">Employer Profile </td>
                </tr>
              <tr>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
			
			  <tr>
			  <td >&nbsp;			  </td>
			  </tr>
              <tr>
                <td align="left" valign="top" style="text-align:justify;">
<?php

				include("connection.php");
				$aa=$_SESSION["currentuser"];
$sql="select * from company where mail_id='$aa'";
$result=mysql_query($sql);

echo "<table width='50%'  border='0' bgcolor='#FFFFFF' align='center'>";
	echo "<tr bgcolor='#CCCCCC'>
             <td colspan='2'><div align='center'><strong>MY PROFILE </strong></div></td>
              </tr>";
            
while($row=mysql_fetch_array($result))
{
$id=$row['company_id'];
$c_name=$row['c_name'];
$mail_id=$row['mail_id'];
$phone=$row['phone'];
$mobile=$row['mobile'];
$fax_no=$row['fax_no'];
$web_link=$row['web_link'];
$address=$row['address'];
$city=$row['city'];
$country=$row['country'];
$postal_code=$row['postal_code'];
$industry=$row['industry'];
$c_pname=$row['contact_pname'];
$de=$row['designation1'];
$mob=$row['mobile']; 
		echo "<tr>
		<th>company Name</th>
		<td>$c_name</td>
		</tr>";
		echo "<tr>
		<th>Mail_id</th> 
		<td>$mail_id</td>
		</tr>";
		echo "<tr>
		<th>Phone</th> 
		<td>$phone</td>
		</tr>";
		echo "<tr>
		<th>Mobile</th>
		<td>$mobile</td>
		</tr>";
		echo "<tr>
		<th>Fax_no</th>
		<td>$fax_no</td>
		</tr>";
		echo "<tr>
		<th>Web Link</th>
		<td>$web_link</td>
		</tr>";
		echo "<tr>
		<th>Address</th>
		<td>$address</td>
		</tr>";
		echo "<tr>
		<th>City</th>
		<td>$city</td>
		</tr>";
		echo "<tr >
		<th>Country</th>
		<td>$country</td>
		</tr>";
		echo "<tr>
		<th>Postal code</th>
		<td>$postal_code</td>
		</tr>";
		echo "<tr>
		<th>Industry</th>
		<td>$industry</td>
		</tr>";
		echo "<tr>
		<th>Contact Person Name</th>
		<td>$c_pname</td>
		</tr>";
		echo "<tr>
		<th>Designation1</th>
		<td>$de</td>
		</tr>";
		echo "<tr bgcolor='#CCCCCC'>
		<td colspan='2' align='center'><a href='updatecompany.php?cid=$id' class='style1'><strong>Edit</strong></a></td>
		</tr>";
		}
		echo"</table>";
?>				</td></tr>
             
              
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="740" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="6" rowspan="2" align="left" valign="top">&nbsp;</td>
            <td style="white-space:pre; font-size:12px; color:#601E29; color:#B46471;" height="23" colspan="2" align="center" valign="middle" bgcolor="#FFEEF2"><a href="index.php" class="footer_link">HOME</a> | <a href="about.html" class="footer_link">About us </a> | <a href="contact.html" class="footer_link">Contact us </a></td>
            <td width="10" rowspan="2" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="497" align="right" valign="top" class="footer_left_bg"><span class="footer_link" style="font-size:10px; text-decoration:none; padding-right:130px; color:#B46471;">.</span></td>

            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>

</table>
</body>
</html>
<?php
}
?>