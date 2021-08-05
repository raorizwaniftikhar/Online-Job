<?php
session_start();
include("connection.php");

echo $myusername=$_POST['mail'];
echo $mypassword=$_POST['pw'];



$sql="SELECT mail_id,password FROM company WHERE mail_id='$myusername' and password='$mypassword'";

	$result=mysql_query($sql);

	$count=mysql_num_rows($result);



		if(mysql_num_rows($result)==1)
		{
			
			$_SESSION["currentuser"]=$myusername;
//			echo "You are logged in as  <br>";
			header("location:employerprofile.php");

		}
		else 
		{
		header("location:employer.html");
		}
			

?>