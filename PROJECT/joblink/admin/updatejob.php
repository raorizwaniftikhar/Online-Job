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
<title>Update jobs</title>
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
                <td align="center" valign="middle" bgcolor="#3997DD" style="font-size:10px; color:#FFF;">User Guid </td>
                </tr>
              <tr>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top" style="text-align:justify;">
<?php
include("connection.php");
if($_POST['Submit']){
$id=$_POST['id'];
$jtitle=$_POST['jtitle'];
$pdate=$_POST['pdate'];
$ldate=$_POST['ldate'];
$sk=$_POST['sk'];
$exp=$_POST['exp'];
$edu=$_POST['edu'];
$rank=$_POST['rank'];
$salary=$_POST['salary'];
$st=$_POST['st'];
$gender=$_POST['gender'];

$sql ="UPDATE `project`.`jobs` SET `jobtitle` = '$jtitle',
`posted_date` = '$pdate',
`last_date` = '$ldate',
`skill` = '$sk',
`experience` = '$exp',
`education` = '$edu',
`post` = '$rank',
`salary_range` = '$salary',
`status` = '$st',
`e_status` = '$est',
`prefred_gender` = '$gender' WHERE `jobs`.`job_id` =$id";

$result=mysql_query($sql);
//header("location:viewjob.php");
echo "
<script language='javascript'>


window.location='viewjob.php';


</script> ";
exit;
}
$id=$_REQUEST['id'];

$result=mysql_query("select * from jobs where job_id='$id'");

$row=mysql_fetch_array($result);

mysql_close();
?>

<form id="form1" name="form1" method="post" action="<?php echo $PHP_SELF; ?>">
<table align="center" background="skyblue">

<input type="hidden" name="id" value="<?php echo $row['job_id']; ?>"/>

<tr>
<td>Job title :</td> 
<td><input name="jtitle" type="text" id="name" value="<?php echo $row['jobtitle']; ?>"/><td>

</tr>
<tr>
<td>Posted Date   :</td>  
<td><input name="pdate" type="text" id="name" value="<?php echo $row['posted_date']; ?>"/></td> 

</tr>
<tr>
<td>Last date: </td> 
<td><input name="ldate" type="text" id="name" value="<?php echo $row['last_date']; ?>"/></td> 

</tr>
<tr>
<td>Skill   : </td> 
<td><input name="sk" type="text" id="name" value="<?php echo $row['skill']; ?>"/></td> 

</tr>
<tr>
<td>Experience   :</td>  
<td><input name="exp" type="text" id="name" value="<?php echo $row['experience']; ?>"/></td> 

</tr>
<tr>
<td><p>Education   :</td>  
<td><input name="edu" type="text" id="name" value="<?php echo $row['education']; ?>"/></td> 


</tr>
<tr>
<td><p>Post   :</td>  
<td><input name="rank" type="text" id="name" value="<?php echo $row['post']; ?>"/></td> 


</tr>
<tr>
<td><p>Salary range   :</td>  
<td><input name="range" type="text" id="name" value="<?php echo $row['salary_range']; ?>"/></td> 


</tr><tr>
<td><p>Status   :</td>  
<td><input name="st" type="text" id="name" value="<?php echo $row['status']; ?>"/></td> 


</tr>
<tr>
<td><p>Employee status   :</td>  
<td><input name="est" type="text" id="name" value="<?php echo $row['e_status']; ?>"/></td> 


</tr>
<tr>
<td><p>Prefred Gender   :</td>  
<td><input name="gender" type="text" id="name" value="<?php echo $row['prefred_gender']; ?>"/></td> 
</tr>
<tr>
<td><input type="submit" name="Submit" value="update" /></td> 

</tr>
</table>
</form> 

				
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
            <td width="497" align="right" valign="top" class="footer_left_bg">Copyright &copy; Muhammad Mtoqeer 2014</td>

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
