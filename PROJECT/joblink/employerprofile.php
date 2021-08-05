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
                <td height="27" align="left" valign="middle"><a href="employerprofile.php" class="left_link">Employer</a></td>
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
			  <td >&nbsp;
			  
			  </td>
			  </tr>
              <tr>
                <td align="left" valign="top" style="text-align:justify;">
<?php

				include("connection.php");
				$aa=$_SESSION["currentuser"];
$sql="select * from company where mail_id='$aa'";
		$result=mysql_query($sql);
	    $row=mysql_fetch_array($result);
		$id=$row['company_id'];
		//echo $id;

$sql="select * from jobs WHERE company_id='$id'";
$record=mysql_query($sql);

echo "<table width='50%'  border='1' bgcolor='#FFFFFF' align='center'>";
	echo "<tr bgcolor='#CCCCCC'>
             <td colspan='5'><div align='center'><strong>Previous Posted jobs  </strong></div></td>
              </tr>";
        
		echo "<tr bgcolor='#CCCCCC'>
		
		<th>Job_title</th>
		<th>posted_date</th>
		<th>Last_date</th>
		<th>Detail</th>
		<th>Applicants</th>
		
		</tr>";
while($row=mysql_fetch_array($record))
{

$id=$row['job_id'];

$pdate=$row['posted_date'];
$ldate=$row['last_date'];
$jobtitle=$row['jobtitle'];

		echo "<tr bgcolor='skyblue'>
		
		<td>$jobtitle</td>
		<td>$pdate</td>
		<td>$ldate</td>
		<td> <a href=postedjobdetail.php?jid=$id>[Detail] </a></td>
		<td> <a href=applicant.php?jid=$id>[Applicants] </a></td>
		
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
            <td style="white-space:pre; font-size:12px; color:#601E29; color:#B46471;" height="23" colspan="2" align="center" valign="middle" bgcolor="#FFEEF2"><a href="index.php" class="footer_link">HOME</a> | <a href="about.html" class="footer_link">About us </a> | <a href="contact.html" class="footer_link">Contact us </a></td>
            <td width="10" rowspan="2" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="497" align="right" valign="top" class="footer_left_bg"><span class="footer_link" style="font-size:10px; text-decoration:none; padding-right:130px; color:#B46471;">.</span>Copyright © Muhammad Toqeer 2014</td>

            <td >&nbsp;</td>
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