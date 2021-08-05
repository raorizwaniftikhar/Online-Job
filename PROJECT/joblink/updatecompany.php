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
<title>update employer</title>
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
<script language="JavaScript" src="gen_validatorv31.js" type="text/javascript">
</script>
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
                <td align="center" valign="middle" bgcolor="#3997DD" style="font-size:10px; color:#FFF;">My Profile </td>
                </tr>
              <tr>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top" style="text-align:justify;">
<?php

include_once("connection.php");

if($_POST['Submit']){

$id=$_POST['id'];
$name=$_POST['name'];
$indus=$_POST['industry'];
$mail=$_POST['mail'];
$phon=$_POST['phone'];
$mob=$_POST['mob'];
$ad=$_POST['ad'];
$citi=$_POST['city'];
$ctry=$_POST['country'];
$fax=$_POST['fax'];

$sql = "UPDATE `company` SET `c_name` = '$name',
`mail_id` = '$mail',
`phone` = '$phon',
`mobile` = '$mob',
`fax_no` = '$fax',
`address` = '$ad',
`city` = '$citi',
`country` = '$ctry',
`industry` = '$indus' WHERE `company`.`company_id`=$id";
$result=mysql_query($sql);

//header("location:viewcompany.php");
echo "
<script language='javascript'>


window.location='eprofile.php';


</script> ";
exit;
}
$id=$_REQUEST['cid'];

$result=mysql_query("select * from company where company_id='$id'");

$row=mysql_fetch_array($result);

mysql_close();
?>

<form id="form1" name="form1" method="post" action="<?php echo $PHP_SELF; ?>">
<input type="hidden" name="id" value="<?php echo $row['company_id']; ?>"/>
<table>
<tr>
<td><p>Company Name : </p></td>
<td><input name="name" type="text" id="name" value="<?php echo $row['c_name']; ?>"/>
</td>
</tr>
<tr>
<td><p>Mail id  : </p></td>
<td><input name="mail" type="text" id="mail" value="<?php echo $row['mail_id']; ?>"/>
</td>
</tr>
<tr>
<td><p>Phone  : </p></td>
<td><input name="phone" type="text" id="phone" value="<?php echo $row['phone']; ?>"/>
</td>
</tr>
<tr>
<td><p>Mobile   : </p></td>
<td><input name="mob" type="text" id="mob" value="<?php echo $row['mobile']; ?>"/></td>
</tr>
<tr>
<td><p>Fax no.   : </p></td>
<td><input name="fax" type="text" id="fax" value="<?php echo $row['fax_no']; ?>"/></td>
</tr>
<tr>
<td><p>Industry   : </p></td>
<td><input name="industry" type="text" id="industry" value="<?php echo $row['industry']; ?>"/></td>
</tr>
<tr>
<td><p>Address   : </p></td>
<td><input name="ad" type="text" id="ad" value="<?php echo $row['address']; ?>"/></td>
</tr>
<tr>
<td><p>City   : </p></td>
<td><input name="city" type="text" id="city" value="<?php echo $row['city']; ?>"/></td>
</tr>
<tr>
<td><p>Country   : </p></td>
<td><input name="country" type="text" id="country" value="<?php echo $row['country']; ?>"/></td>
</tr>

<tr colspan="2" align="center">
<td><input type="submit" name="Submit" value="Edit" /></td>
</tr>
</table>
</form> 
						<script language="JavaScript" type="text/javascript">

  var frmvalidator  = new Validator("form1");
 
	
  
  frmvalidator.addValidation("mail","maxlen=50");
  frmvalidator.addValidation("mail","req","Please enter your First email id");
  frmvalidator.addValidation("mail","email");
  

  frmvalidator.addValidation("name","req","Please enter your COmpany Name");
  frmvalidator.addValidation("name","maxlen=20",	"Max length for FirstName is 20");
  frmvalidator.addValidation("name","alpha_s","Alphabetic chars only");
  
   frmvalidator.addValidation("industry","req","Please enter your industry Name");
  frmvalidator.addValidation("industry","maxlen=20",	"Max length for industry is 20");
  frmvalidator.addValidation("industry","alpha_s","Alphabetic chars only");
  
  frmvalidator.addValidation("mob","maxlen=50");
  frmvalidator.addValidation("mob","req","Please enter your Mobile no");
  frmvalidator.addValidation("mob","numeric");
  
   
  
    frmvalidator.addValidation("phone","maxlen=50");
	frmvalidator.addValidation("phone","req","Please enter your Phone no");
  frmvalidator.addValidation("phone","numeric");
  
  frmvalidator.addValidation("city","maxlen=20");
	frmvalidator.addValidation("city","req","Please enter your city");
  frmvalidator.addValidation("city","alpha");
  
  
   frmvalidator.addValidation("fax","maxlen=50");
	frmvalidator.addValidation("fax","req","Please enter your Fax no");
  frmvalidator.addValidation("fax","numeric");
  
  frmvalidator.addValidation("ad","maxlen=50");
  frmvalidator.addValidation("ad","req","Please enter your Address");


  
  frmvalidator.addValidation("Country","dontselect=0");
  	frmvalidator.addValidation("Country","req","Please select your Country");
  frmvalidator.addValidation("country","alpha");
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
            <td style="white-space:pre; font-size:12px; color:#601E29; color:#B46471;" height="23" colspan="2" align="center" valign="middle" bgcolor="#FFEEF2"><a href="index.html" class="footer_link">HOME</a> | <a href="about.html" class="footer_link">About us </a> | <a href="contact.html" class="footer_link">Contact us </a></td>
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