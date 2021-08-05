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
<title>Add jobs</title>
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
              <img src="images/logo.jpg" alt="Company Logo" width="130" height="70" /> </td>
  </tr>
  <tr>
<td  width="100%" height="40%">&nbsp;</td>
</tr>
    			    <tr>
   <td style="white-space:pre; font-size:12px; color:#601E29; color:#B46471;" height="23"  align="right" valign="middle" bgcolor="#FFEEF2"><a href="index.php" class="footer_link">HOME</a> | <a href="about.html" class="footer_link">About us </a>| <a href="contact.html" class="footer_link">Contact us </a> |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php" class="footer_link"><strong>Log out</strong> </a></td>
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
                <td height="27" align="left" valign="middle"><a href="employerprofile.php" class="left_link">Employer</a></td>
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
                <td align="center" valign="middle" bgcolor="#3997DD" style="font-size:10px; color:#FFF;">Post job </td>
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


if($_POST['Submit'])
{
$aa=$_SESSION["currentuser"];
				
				$sql="select * from company where mail_id='$aa'";
				$result=mysql_query($sql);
	    		$row=mysql_fetch_array($result);
				$cid=$row['company_id'];
				
$jtitle=$_REQUEST['jtitle'];
$pdate=$_REQUEST['pdate'];
$ldate=$_REQUEST['ldate'];
$sk=$_REQUEST['sk'];
$exp=$_REQUEST['exp'];
$edu=$_REQUEST['edu'];
$post=$_REQUEST['post'];
$salary=$_REQUEST['salary'];
$st=$_REQUEST['st'];
$est=$_REQUEST['est'];
$gender=$_REQUEST['gender'];

$sql="INSERT INTO `project`.`jobs` (
`job_id` ,
`jobtitle` ,
`posted_date` ,
`last_date` ,
`skill` ,
`experience` ,
`education` ,
`post` ,
`salary_range` ,
`status` ,
`e_status` ,
`prefred_gender` ,
`company_id`
)
VALUES (
'null', '$jtitle', '$pdate', '$ldate', '$sk', '$exp', '$edu', '$post', '$salary', '$st', '$est', '$gender', '$cid'
)";

$results = mysql_query($sql);
if($results)

echo "
<script language='javascript'>


window.location='employerprofile.php';


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

<tr>
<td>Job title :</td> 
<td><input name="jtitle" type="text" id="jtitle" />

<td></tr>
<tr>
<td>Posted Date   :</td>  
<td><input name="pdate" type="text" id="name" />
(yyyy-mm-dd)</td>
</tr>
<tr>
<td>Last date: </td> 
<td><input name="ldate" type="text" id="name" /></td> 
</tr>
<tr>
<td>Skill   : </td> 
<td><input name="sk" type="text" id="name"  /></td> 
</tr>
<tr>
<td>Experience   :</td>  
<td><input name="exp" type="text" id="name"/>
year
(In decimal) </td> 
</tr>
<tr>
<td><p>Education   :</td>  
<td><input name="edu" type="text" id="name"/></td> 
</tr>
<tr>
<td><p>Post   :</td>  
<td><input name="post" type="text" id="name" /></td> 
</tr>
<tr>
<td><p>Salary range   :</td>  
<td><input name="salary" type="text" id="name"/></td> 
</tr><tr>
                      <td>Status</td>
                      <td>
                        <select name="st" id="st">
                          <option value="Permanent">Permanent</option>
                          <option value="Contract">Contract</option>
						  <option value="Not Required">Not Required</option>
                        </select>                      </td>
                    </tr>
<tr>
<td><p>Employee status   :</td>  
<td><select name="est" id="est">
                          <option value="8 hour">8 hour</option>
                          <option value="10 hour">10 hour</option>
						  <option value="12 hour">12 hour</option>
						  <option value="16 hour">16 hour</option>
						  <option value="18 hour">18 hour</option>
                         
                        </select></td> 
</tr>
<tr>
<td><p>Prefred Gender   :</td>  
<td><input type="radio" name="gender"  id="name" value=male >male
<input type="radio" name="gender"  id="name" value=male >female
<input type="radio" name="gender"  id="name" value=mal >Doesn't matter</td> 
</tr>

<tr>
<td><input type="submit" name="Submit" value="Post" /></td> 
</tr>
</table>
</form>
<script language="JavaScript" type="text/javascript">

  var frmvalidator  = new Validator("form1");
  
  
   frmvalidator.addValidation("jtitle","req","Please enter your job title");
  frmvalidator.addValidation("jtitle","maxlen=40",	"Max length for job title is 40");
  frmvalidator.addValidation("jtitle","alpha_num","Alphabetic chars only");
  
  frmvalidator.addValidation("exp","maxlen=50");
  frmvalidator.addValidation("exp","req","Please enter your experience");
  frmvalidator.addValidation("exp","numeric");
  
 
  frmvalidator.addValidation("edu","req","Please enter your Education");
  frmvalidator.addValidation("edu","maxlen=20","Max length is 20");
   frmvalidator.addValidation("edu","alpha_s","Alphabetic chars only");

    frmvalidator.addValidation("salary","maxlen=50");
	frmvalidator.addValidation("salary","req","Please enter your salary");
  frmvalidator.addValidation("salary","numeric");
  
  frmvalidator.addValidation("sk","maxlen=20");
	frmvalidator.addValidation("sk","req","Please enter your skill");
  frmvalidator.addValidation("sk","alpha_num");
  
    frmvalidator.addValidation("post","maxlen=40", "Max length for job title is 40");
	frmvalidator.addValidation("post","req","Please enter your post");
  frmvalidator.addValidation("post","alpha_num");
 
       frmvalidator.addValidation("est","maxlen=50");
	frmvalidator.addValidation("est","req","Please enter your Employee status");
  frmvalidator.addValidation("est","alpha_num");
  
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