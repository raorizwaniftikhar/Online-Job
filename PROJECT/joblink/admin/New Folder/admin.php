<?php
session_start();
if(!(isset($_SESSION["currentuser"])))
{
header("location:adminlogin.html");
}
else{
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to job4career</title>
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
            contact@job4career.com</a></td>
</tr>
<tr>
 <td height="65" align="left" valign="top">
              <img src="images/logo.jpg" alt="Company Logo" width="130" height="76" /> </td>
  </tr>
<tr>
<td width="100%" align="center" valign="top"><img src="images/header_bg.jpg" alt="Wasim here" width="573" height="175" border="0" /></td>
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
              <tr>
                <td height="20" align="left" valign="middle" class="highlight" style="text-transform:uppercase; font-size:10px; color:#7AA01E;">newsletter signup</td>
              </tr>
              <tr>
                <td height="22" align="left" valign="middle">E-mail Address:</td>
              </tr>
              <tr>
                <td align="left" valign="middle"><input name="textfield" type="text" class="input_box" />                </td>
              </tr>
              <tr>
                <td style="padding-top:9px;" align="center" valign="middle"><a href="submit.html" ><img src="images/submit_bt.gif" alt="Submit" width="57" height="20" border="0" /></a></td>
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
                <td align="left" valign="top" style="text-align:justify;"><table cellspacing="0" cellpadding="0">
                  <tr>
                    <td><table cellspacing="0" cellpadding="0">
                     
                      <tr align="center">
                        <td><blockquote>
                            <p><strong> </strong></p>
                            <p align="center" class="style2">Welcom Wasim </p>
                            <p><strong>Job4Career.com</strong></p>
                            <p> is just like <strong>a beam of light that guides you to pursue your career in reputable organizations.</strong><br />
                                <br />
                              job4caree is not only a traditional job portal it provides the  complete and comprehensive solutions for both the recruiters and job  seekers. On the basis of our prior experience in the recruitment  consultancy we launched our services in the most potential job market  i.e. Pakistan. <br />
  <br />
                              We understand that how to match applicants with jobs where they will be  productive and motivated. We share our knowledge with customers to help  them manage their human resources more effectively. We provide  innovative technologies and creative solutions that help to make SMS  the friendly company to work within the staffing industry. <br />
  <br />
                              Career Management services Pvt. Limited is a leader in the employment  services industry in the Middle East, offering customers a range of  services to meet their needs throughout the employment and business  cycle. The company specializes in permanent, temporary and contract  recruitment; employee assessment; training; career transition and  organizational consulting services. <br />
  <br />
                              The focus of our work is on increasing productivity through improved  quality, efficiency and cost reduction, enabling customers to  concentrate on their core business activities.<br />
                            </p>
                            <p> <strong>Philosophy</strong> </p>
                            <p><br />
                              Our philosophy is to provide our clients with the best service. It is  our people who make customers happy. Therefore, Career Management  Services Pvt. Limited has a very good track record to provide complete  range of HR services. Their personal skills and satisfaction are our  assurances that customers are in good hands. Our team combines emerging  information technology with proven project management practices and  development methodologies to provide you with the HR services. We work  closely with clients to ensure team synergy. We plan, manage, staff,  deliver on time and within the budget. <br />
                            </p>
                        </blockquote></td>
                      </tr>
                    </table>
                    <blockquote>
                      <p align="center" class="style2">&nbsp;</p>
                        <p align="justify"><br />
                        </p>
                    </blockquote></td>
                  </tr>
                
                </table>
                <br />
                  <br /></td>
              </tr>
             
              
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="740" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="6" rowspan="2" align="left" valign="top">&nbsp;</td>
            <td style="white-space:pre; font-size:12px; color:#601E29; color:#B46471;" height="23" colspan="2" align="center" valign="middle" bgcolor="#FFEEF2"><a href="index.html" class="footer_link">HOME</a> | <a href="about.html" class="footer_link">About us </a> | <a href="profile.html" class="footer_link">Profile</a>| <a href="contact.html" class="footer_link">Contact us </a></td>
            <td width="10" rowspan="2" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="497" align="right" valign="top" class="footer_left_bg"><span class="footer_link" style="font-size:10px; text-decoration:none; padding-right:130px; color:#B46471;">&copy;2014 job4career .</span></td>

            <td width="233" align="left" valign="top"><a href="http://www.sarkis-webdesign.com/" target="_blank"><img src="images/web-designer.gif" alt="Wasim here" width="247" height="32" border="0" /></a></td>
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