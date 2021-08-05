<?php
$pw = $_REQUEST['t1'];
$mail = $_REQUEST['t2'];
include("connection.php");
//---------- connect to localhost mysql server -----
 //    $connection = mysql_connect("localhost","root","") or die(" Can not connect to Localhost");
	 
	 //------------- connect to our Database -------
	 
//	$mydb = mysql_select_db("project",$connection)or die(" Can not connect to Database");
	//-------------- connect to table , fetch data ---------
	$sql="SELECT email,password FROM admin WHERE email='$mail' and password='$pw'";
	$result=mysql_query($sql);

	$count=mysql_num_rows($result);


		if($count==1)
		{
				echo "<font color=red>Succesful....</font> <br>";
		}
		else 
		{
		echo "<font color=red> wrong password or domain name </font> <br>";

		}


?>