<?php
session_start();
if(!(isset($_SESSION["user"])))
{
header("location:jobseeker.html");
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Current jobs</title>
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
<script language="JavaScript" src="gen_validatorv31.js" type="text/javascript"></script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td  width="100%" height="40%">&nbsp;</td>
</tr>
<tr>
<td align="right" valign="bottom"><a href="mailto:abc@yoursite.com" style="color:#333333; text-decoration:none;"> Mobile:+92-302-7477137<br /> 
    Email:contact@joblink.com</a></td>
</tr>
<tr>
 <td height="65" align="left" valign="top">
              <p><img src="images/logo.jpg" alt="Company Logo" width="130" height="76" /> </p>
              <p>&nbsp;</p></td>
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
                <td height="27" align="left" valign="middle"><a href="index.php" class="left_link" style="color:#41A9E8;">HOME</a></td>
              </tr>           
              <tr>
                <td height="27" align="left" valign="middle"><a href="about.html" class="left_link">About us </a><a href="adminlogin.html" class="left_link"></a></td>
              </tr>
			    <tr>
                <td height="27" align="left" valign="middle"><a href="currentjob.php" class="left_link"> Jobseeker</a></td>
              </tr>
              <tr>
                <td height="27" align="left" valign="middle"><a href="employerprofile.php" class="left_link"> Employer</a><a href="login.html" class="left_link">s</a></td>
              </tr>
              <tr>
                <td height="27" align="left" valign="middle"><a href="currentjob.php" class="left_link">Current job </a></td>
              </tr>
			  <tr>
                <td height="27" align="left" valign="middle"><a href="resume.php" class="left_link">Upload Resume</a></td>
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
                <td align="center" valign="middle" bgcolor="#3997DD" style="font-size:10px; color:#FFF;">Current jobs </td>
                </tr>
              <tr>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
			  	  <tr>
			  
			  <form method="post" action="search.php" name="myform">
			  <td width="500" align="center">
			  <strong>Search Jobs</strong>&nbsp;
			  <input type="text" name="search"  />&nbsp;
			  <input type="submit" value="click to search" /></td>
			  
			  </form>
			  	  <script language="JavaScript" type="text/javascript">

  var frmvalidator  = new Validator("myform");
  
  frmvalidator.addValidation("search","req","Please enter keyword");
  frmvalidator.addValidation("search","maxlen=10","Max length is 10");
  frmvalidator.addValidation("search","minlen=3","keyword length must be upto 3 characters");
  frmvalidator.addValidation("searc","alpha_s");

</script>
			 </tr>
			  
			  <tr>
			  <td >&nbsp;
			  
			  </td>
			  </tr>
              <tr>
                <td align="left" valign="top" style="text-align:justify;">
<?php

include("connection.php");
$sql="select * from posted_job";
$record=mysql_query($sql);

echo "<table width='50%'  border='0' bgcolor='#FFFFFF' align='center'>";
	echo "<tr bgcolor='#CCCCCC'>
             <td colspan='6'><div align='center'><strong>Current jobs  </strong></div></td>
              </tr>";
            
		echo "<tr bgcolor='#CCCCCC'>
		<th>company_name</th>
		<th>Job_title</th>
		<th>posted_date</th>
		<th>Last_date</th>
		<th>View</th>
		<th>Apply</th>
		</tr>";
while($row=mysql_fetch_array($record))
{

$id=$row['job_id'];
$c_id=$row['company_id'];

$sql2="select c_name from company where company_id=$c_id ";
$record2=mysql_query($sql2);
 $company = mysql_fetch_array($record2);
 $cn=$company['0'];

$pdate=$row['posted-date'];
$ldate=$row['last_date'];
$jobtitle=$row['jobtitle'];

		echo "<tr bgcolor='skyblue'>
		<td>$cn</td>
		<td>$jobtitle</td>
		<td>$pdate</td>
		<td>$ldate</td>
		<td> <a href=jobdetail.php?jid=$id>[View] </a></td>
		<td><a href=mail.php?jid=$id>[Apply] </a></td>
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
          <tr align="center">
            <td colspan="2" width="497" align="center" valign="top" class="footer_left_bg">Copyright &copy; Muhammad Toqeer 2014</td>
          </tr>
          <tr align="center">
            <td align="left" valign="top">&nbsp;</td>
            <td colspan="2" align="center" valign="top" class="footer_left_bg">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
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