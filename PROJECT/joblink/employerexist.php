<?php
include("connection.php");

$pw1=$_REQUEST['t1'];
$pw2=$_REQUEST['t2'];
$mail=$_REQUEST['mail'];


$myquery = "SELECT * FROM `company` WHERE `company`.`mail_id`='".$mail."'";
 $results = mysql_query($myquery);
 $row = mysql_fetch_array($results);
	if($row['mail_id']==$mail)
		{

		echo "<font color=red>mail id already exist</font>";
		}
		else if($pw1!=$pw2){
		echo " <font color=red> plz confirm the password</font>"; }
?>