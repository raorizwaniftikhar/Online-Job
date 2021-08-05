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
<td align="right" valign="bottom"><a href="mailto:abc@yoursite.com" style="color:#333333; text-decoration:none;"> Mobile:+92-302-7477137<br /> 
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
                <td height="27" align="left" valign="middle"><a href="currentjob.php" class="left_link">Job Seeker </a></td>
              </tr>
              <tr>
                <td height="27" align="left" valign="middle"><a href="employerprofile.php" class="left_link">Employer</a></td>
              </tr>
			   <tr>
                <td height="27" align="left" valign="middle"><a href="addjob.php" class="left_link">Post New job</a><a href="employer.html" class="left_link"></a></td>
              </tr>
			   <tr>
                <td height="27" align="left" valign="middle"><a href="eprofile.php" class="left_link">View Profile </a></td>
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
                <td align="center" valign="middle" bgcolor="#3997DD" style="font-size:10px; color:#FFF;">Applicants</td>
                </tr>
              <tr>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
			
			  
			  <tr>
			  <td >&nbsp;
			  
			  </td>
			  </tr>
              <tr>
                <td align="left" valign="top" style="text-align:justify;"><?php

include("connection.php");
$id=$_REQUEST['jid'];
$sql="select * from u_applied_job where Job_id=$id";
$result=mysql_query($sql);


echo "<table width='50%'  border='1' bgcolor='#FFFFFF' align='center'>";
	echo "<tr bgcolor='#CCCCCC'>
             <td colspan='6'><div align='center'><strong>Applicant Details </strong></div></td>
              </tr>";
			  
		echo "<tr bgcolor='#CCCCCC'>
		<th>Name</th>
		<th>Mail id</th>
		<th>Gender</th>
		<th>Mobile</th>	
		<th>Address</th>	
		<th>Education </th>
		
		</tr>";
    while($row=mysql_fetch_array($result))
		{
		//echo $id=$row['job_id'];
		  $nic=$row['nic'];
		
		
		$sql2="select * from user where nic_no =$nic";
		$result2=mysql_query($sql2);
		
		while($row2=mysql_fetch_array($result2))
			{
			$fname=$row2['f_name'];			
			$mail=$row2['mail_id'];	
			$gender=$row2['gender'];	
			$mob=$row2['mobile'];
			
			$city=$row2['city'];
			echo "<tr bgcolor='skyblue'>
			<td>$fname</td>			
			<td>$mail</td>		
			<td>$gender</td>	
			<td>$mob</td>
			
			<td>$city</td>
			
			<td> <a href=applicantdetail.php?id=$nic>[Education] </a></td>
			
			</tr>";
			}			
		}        

/*
$pdate=$row['posted_date'];
$ldate=$row['last_date'];
$jobtitle=$row['jobtitle'];
$sk=$row['skill'];
$exp=$row['experience'];
$edu=$row['education'];
$post=$row['post'];
$salary=$row['salary_range'];
$st=$row['status'];
$est=$row['e_status'];
$gender=$row['prefred_gender'];

		echo "<tr bgcolor='#6699FF'>
		<th>Job title</th> 
		<td>$jobtitle</td>
		</tr>";
		echo "<tr bgcolor='#6699FF'>
		<th>Post</th> 
		<td>$post</td>
		</tr>";
		echo "<tr bgcolor='#6699FF'>
		<th>Education</th>
		<td>$edu</td>
		</tr>";
		echo "<tr bgcolor='#6699FF'>
		<th>Salary range</th>
		<td>$salary</td>
		</tr>";
		echo "<tr bgcolor='#6699FF'>
		<th>Status</th>
		<td>$st</td>
		</tr>";
		echo "<tr bgcolor='#6699FF'>
		<th>Employment Status</th>
		<td>$est</td>
		</tr>";
		echo "<tr bgcolor='#6699FF'>
		<th>Prefred Gender</th>
		<td>$gender</td>
		</tr>";
		echo "<tr bgcolor='#6699FF'>
		<th>Experience</th>
		<td>$exp</td>
		</tr>";
		echo "<tr bgcolor='#6699FF'>
		<th>Skill</th>
		<td>$sk</td>
		</tr>";
		echo "<tr bgcolor='#6699FF'>
		<th>posted date</th>
		<td>$pdate</td>
		</tr>";
		echo "<tr bgcolor='#6699FF'>
		<th>Last date</th>
		<td>$ldate</td>
		</tr>";
		
		//}*/
		echo"</table>";
?></td>
              </tr>
             
              
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
            <td width="497" align="right" valign="top" class="footer_left_bg">Copyright &copy; Muhammad Toqeer 2014</td>

            <td width="233" align="left" valign="top">&nbsp;</td>
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