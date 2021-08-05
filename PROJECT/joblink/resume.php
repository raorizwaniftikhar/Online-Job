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
<title>Upload Resume </title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />

<style type="text/css">
<!--
.style1 {
	color: #3399FF;
	font-weight: bold;
	font-size: 16px;
}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  
<tr>
<td align="right" valign="bottom"><a href="mailto:abc@yoursite.com" style="color:#333333; text-decoration:none;"> Mobile:+92-302-7477137<br /> 
    Email:mtoqeer14@gmail.com.com</a></td>
</tr>
<tr>
 <td height="65" align="left" valign="top">
              <img src="images/logo.jpg" alt="Company Logo" width="130" height="76" /> 
			  <?php
				include("connection.php");
				$aa=$_SESSION["user"];
				
				$sql="select * from user where domain_name='$aa'";
				$result=mysql_query($sql);
	    		$row=mysql_fetch_array($result);
				$name=$row['f_name'];
				echo "<font class=style1 font_family=italic> Hello&nbsp;".$name;
				echo"</font>";
				?>			  </td>
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
                <td height="27" align="left" valign="middle"><a href="index.php" class="left_link" style="color:#41A9E8;">HOME</a></td>
              </tr>
              <tr>
                <td height="27" align="left" valign="middle"><a href="about.html" class="left_link">About us </a></td>
              </tr>
            
              <tr>
                <td height="27" align="left" valign="middle"><a href="currentjob.php" class="left_link">Job Seeker </a></td>
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
                <td align="justify" valign="top">
				.&nbsp;
				</td>
              </tr>
              <tr>
                <td align="center" valign="middle" bgcolor="#3997DD" style="font-size:10px; color:#FFF;">Upload your CV </td>
                </tr>
          
              <tr>
                <td align="left" valign="top" style="text-align:justify;"><table cellspacing="0" cellpadding="0">
                
                  <tr>
                    <td><blockquote>
                        <blockquote>
                          <p>&nbsp;</p>
						  
						  <form id="upload" name="upload"action="upload_file.php" method="post"
enctype="multipart/form-data">
					<table>
					<tr>
					<td align="center" colspan="2"> <label for="file"><span class="style1"> Upload your CV now</span><br />
					</label></td></tr>
					
					<br />
					<tr><td>Subject:</td>
					<td><p>
					  <input type="text" name="subject" id="suject" />
					  <?php echo "<font color=red> ".@$_REQUEST['r']; echo "</font>"?>
					  </p>					  </td></tr>
</label><tr>
							<td>File path: </td>
                            <td> <p>&nbsp;
                              </p>
                              <p>
                                <input type="file" name="file" id="file" />
                                
                                <input type="submit" name="submit" value="upload" />
                                <br />
                                <br />
                                <br />							
                                </p></td></tr>
							
							<tr>
							<td colspan="2"align="center">.&nbsp;</td></tr></table>
                          </form>
	
                          <p><br />
                            </p>
                          <blockquote>&nbsp;</blockquote>
                          <p> </p>
                        </blockquote>
                    </blockquote></td>
                  </tr>
                  <tr> </tr>
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
            <td style="white-space:pre; font-size:12px; color:#601E29; color:#B46471;" height="23" colspan="2" align="center" valign="middle" bgcolor="#FFEEF2"><a href="index.php" class="footer_link">HOME</a> | <a href="about.html" class="footer_link">About us </a> | <a href="contact.html" class="footer_link">Contact us </a></td>
            <td width="10" rowspan="2" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="497" align="right" valign="top" class="footer_left_bg">Copyright &copy; Muhammad Toqeer 2014</td>
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