<?php
include("connection.php");
session_start();
$myusername=$_POST['mail'];
$mypassword=$_POST['pw'];




	$sql="SELECT domain_name,password FROM user WHERE domain_name='$myusername' and password='$mypassword'";
	$result=mysql_query($sql);

	$count=mysql_num_rows($result);


		if($count==1)
		{
			$_SESSION["user"]=$myusername;
			
			
			header("location:currentjob.php");

		}
		else 
		{
		header("location:jobseeker.html");
		}
			

?>