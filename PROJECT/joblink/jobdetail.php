<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Job description</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
<!--
.style1 {
	color: #CC3333;
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
<td align="right" valign="bottom"><a href="mailto:abc@yoursite.com" style="color:#333333; text-decoration:none;"> Mobile:+92-346-7477137<br /> 
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
                <td height="27" align="left" valign="middle"><a href="currentjob.php" class="left_link">Job Seeker </a></td>
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
                <td align="center" valign="middle" bgcolor="#3997DD" style="font-size:10px; color:#FFF;">Job description </td>
                </tr>
				<tr>
				<td>&nbsp;</td>
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
  
   frmvalidator.addValidation("search","minlen=3","keyword length must be upto 3 characters");
  frmvalidator.addValidation("search","req","Please enter keyword");
  frmvalidator.addValidation("search","maxlen=20","Max length is 20");
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
$id=$_REQUEST['jid'];
$sql="select * from posted_job where Job_id=$id";
$result=mysql_query($sql);

echo "<table width='50%'  border='0' bgcolor='#FFFFFF' align='center'>";
	echo "<tr bgcolor='#6699FF'>
             <td colspan='2'><div align='center'><strong>job Detail </strong></div></td>
              </tr>";
            
$row=mysql_fetch_array($result);
$id=$row['job_id'];
$c_id=$row['company_id'];
$pdate=$row['posted-date'];
$ldate=$row['last_date'];
$jobtitle=$row['jobtitle'];
$sk=$row['skill'];
$exp=$row['experience'];
$edu=$row['education'];
$pst=$row['post'];
$salary=$row['salary_range'];
$st=$row['status'];
$est=$row['e_status'];
$gender=$row['prefred_gender'];
$desc=$row['description'];

$sql2="select c_name from company where company_id=$c_id ";
$record2=mysql_query($sql2);
 $company = mysql_fetch_array($record2);
 $cn=$company['0'];
 
		echo "<tr>
		<th>company Name</th>
		<td>$cn</td>
		</tr>";
		echo "<tr>
		<th>Job title</th> 
		<td>$jobtitle</td>
		</tr>";
		echo "<tr>
		<th>Post</th> 
		<td>$pst</td>
		</tr>";
		echo "<tr>
		<th>Education</th>
		<td>$edu</td>
		</tr>";
		echo "<tr>
		<th>Salary range</th>
		<td>$salary</td>
		</tr>";
		echo "<tr>
		<th>Status</th>
		<td>$st</td>
		</tr>";
		echo "<tr>
		<th>Employment_Status</th>
		<td>$est Hour</td>
		</tr>";
		echo "<tr>
		<th>Prefred Gender</th>
		<td>$gender</td>
		</tr>";
		echo "<tr>
		<th>Experience</th>
		<td>$exp</td>
		</tr>";
		echo "<tr>
		<th>Skill</th>
		<td>$sk</td>
		</tr>";
		echo "<tr>
		<th>posted date</th>
		<td>$pdate</td>
		</tr>";
		echo "<tr>
		<th>Last date</th>
		<td>$ldate</td>
		</tr>";
		echo "<tr'>
		<th>Description</th>
		<td>$desc</td>
		</tr>";
		echo "<tr>	
		<td colspan='2'>&nbsp;</td>
		</tr>";
		echo "<tr>
		<td>.&nbsp;</td>
		<td align='center' bgcolor='#6699FF'><a href='mail.php?jid=$id' class='style1'>Apply</a></td>
		</tr>";
		//}
		echo"</table>";
?>
    
				
				   
              </tr>
             <tr><td align="right"> <a href="currentjob.php" class="style1">Back to Previouspage</a></td>
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
            <td width="497" align="right" valign="top" class="footer_left_bg"><span class="footer_link" style="font-size:10px; text-decoration:none; padding-right:130px; color:#B46471;">.</span>Copyright © Muhammad Toqeer 2014</td>

            <td >&nbsp;</td>
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
