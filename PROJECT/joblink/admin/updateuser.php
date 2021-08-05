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
<title>Update Jobseeker</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">

.style2 {
	color: #3399FF;
	font-weight: bold;
}
.style3 {
	color: #6699FF;
	font-weight: bold;
}

</style>
<script language="JavaScript" src="gen_validatorv31.js" type="text/javascript"></script>
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
                <td align="center" valign="middle" bgcolor="#3997DD" style="font-size:10px; color:#FFF;">Update Jobseeker </td>
                </tr>
              <tr>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top" style="text-align:justify;">

<?php

include("connection.php");

$id=$_REQUEST['id'];
if($_POST['Submit']){

$id=$_POST['id'];
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$mail=$_POST['mail'];
$phon=$_POST['phone'];
$mob=$_POST['mob'];
$ad=$_POST['ad'];
$city=$_POST['city'];
$country=$_POST['country'];
$dob=$_POST['dob'];


$sql = "UPDATE `project`.`user` SET `f_name` = '$fn',
`l_name` = '$ln',
`mail_id` = '$mail',
`dob` = '$dob',
`address` = '$ad',
`city` = '$city',
`country` = '$country' WHERE CONVERT( `user`.`nic_no` USING utf8 ) = '$id'";

$result = mysql_query($sql);

  //  header("location:viewuser.php");
  echo "
<script language='javascript'>


window.location='viewuser.php';


</script> ";
	exit;

	}
$id=$_REQUEST['id'];

$result=mysql_query("select * from user where nic_no='$id'");

$row=mysql_fetch_array($result);

mysql_close();
?>


<form id="form1" name="form1" method="post" action="<?php echo $PHP_SELF; ?>">
<table align="center" background="skyblue">

<input type="hidden" name="id" value="<?php echo $row['nic_no']; ?>"/>

<tr>
<td>First Name :</td> 
<td><input name="fname" type="text" id="name" value="<?php echo $row['f_name']; ?>"/><td>

</tr>
<tr>
<td>Last name   :</td>  
<td><input name="lname" type="text" id="name" value="<?php echo $row['l_name']; ?>"/></td> 

</tr>
<tr>
<td>Email: </td> 
<td><input name="mail" type="text" id="name" value="<?php echo $row['mail_id']; ?>"/></td> 

</tr>
<tr>
<td>Address   : </td> 
<td><input name="ad" type="text" id="name" value="<?php echo $row['address']; ?>"/></td> 

</tr>
<tr>
<td>City   :</td>  
<td><input name="city" type="text" id="name" value="<?php echo $row['city']; ?>"/></td> 

</tr>
<tr>
<td><p>Country   :</td>  
<td><input name="country" type="text" id="name" value="<?php echo $row['country']; ?>"/></td> 


</tr>
<tr>
<td><p>Date of Birth  :</td>  
<td><input name="dob" type="text" id="name" value="<?php echo $row['dob']; ?>"/></td> 


</tr>



<tr>
<td><input type="submit" name="Submit" value="Update" /></td> 

</tr>
</table>
</form> <script language="JavaScript" type="text/javascript">

  var frmvalidator  = new Validator("form1");
  

  frmvalidator.addValidation("fname","req","Please enter your First Name");
  frmvalidator.addValidation("fname","maxlen=20",	"Max length for FirstName is 20");
  frmvalidator.addValidation("fname","alpha","Alphabetic chars only");
  
   frmvalidator.addValidation("lname","req","Please enter your Last Name");
  frmvalidator.addValidation("lname","maxlen=20",	"Max length for LastName is 20");
  frmvalidator.addValidation("lname","alpha","Alphabetic chars only");
   
  frmvalidator.addValidation("ad","req","Please enter your address");
  frmvalidator.addValidation("ad","maxlen=50","Max length is 50");
    frmvalidator.addValidation("ad","alpha_s");
  
  frmvalidator.addValidation("mail","maxlen=50");
  frmvalidator.addValidation("mail","req","Please enter user email id");
  frmvalidator.addValidation("mail","email");
  
     frmvalidator.addValidation("country","req","Please enter your country");
  frmvalidator.addValidation("country","maxlen=20","Max length is 20");
    frmvalidator.addValidation("country","alpha ");  
  
   frmvalidator.addValidation("city","req","Please enter your city");
  frmvalidator.addValidation("city","maxlen=20","Max length is 20");
    frmvalidator.addValidation("city","alpha ");
	
	</script>

				
				</td></tr>
             
              
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="740" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="6" rowspan="2" align="left" valign="top">&nbsp;</td>
            <td style="white-space:pre; font-size:12px; color:#601E29; color:#B46471;" height="23" colspan="2" align="center" valign="middle" bgcolor="#FFEEF2"><a href="index.html" class="footer_link">HOME</a> | <a href="about.html" class="footer_link">About us </a> | <a href="contact.html" class="footer_link">ontact us </a></td>
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