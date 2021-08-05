<?php
session_start();
$pw = $_REQUEST['pw'];
$mail = $_REQUEST['mail'];
include("connection.php");
//---------- connect to localhost mysql server -----
 //    $connection = mysql_connect("localhost","root","") or die(" Can not connect to Localhost");
	 
	 //------------- connect to our Database -------
	 
//	$mydb = mysql_select_db("project",$connection)or die(" Can not connect to Database");
	//-------------- connect to table , fetch data ---------
	$sql="SELECT email,password FROM admin WHERE email='$mail' and password='$pw'";
	$result=mysql_query($sql);

	$count=mysql_num_rows($result);

echo $count;
		if($count==1)
		{
				
			$_SESSION["admin"]=$mail;
//			echo "You are logged in as  <br>";
			header("location:viewuser.php");
		}
		else 
		{
			header("location:adminlogin.html");

		}


?>