<?php


include("connection.php");


$cname=$_REQUEST["cname"];
$mail=$_REQUEST["dname"];
$phone=$_REQUEST["phone"];
$mob=$_REQUEST["mob"];
$fax=$_REQUEST["fax"];
$link=$_REQUEST["link"];
$ad=$_REQUEST["add"];
$city=$_REQUEST["city"];
$country=$_REQUEST["country"];
$postal=$_REQUEST["postal"];
$indus=$_REQUEST["indus"];
$cpn =$_REQUEST["cpn"];
$d1=$_REQUEST["d1"];
$mob1=$_REQUEST["mob1"];
$phone1=$_REQUEST["phone1"];
$mail1=$_REQUEST["mail1"];
$acp =$_REQUEST["acp"];
$d2=$_REQUEST["d2"];
$mob2=$_REQUEST["mob2"];
$phone2=$_REQUEST["phone2"];
$mail2=$_REQUEST["mail2"];
$pw=$_REQUEST["psw1"];

$sql = "INSERT INTO `project`.`company` (`c_name`, `mail_id`, `phone`, `mobile`, `fax_no`, `web_link`, `address`, `city`, `country`, `postal_code`, `industry`, `contact_pname`, `designation1`, `mobile1`, `phone1`, `mail_id1`, `alternate_contactp`, `designation2`, `mobile2`, `phone2`, `mail_id2`,  `password`) VALUES ('$cname', '$mail', '$phone', '$mob', '$fax', '$link', '$ad', '$city', '$country', '$postal', '$indus', '$cpn', '$d1', '$mob1', '$phone1', '$mail1', '$acp', '$d2', '$mob2', '$phone2', '$mail2', '$pw')";

$results=mysql_query($sql);
if($results)
{
 session_start(); 
	echo $_SESSION["currentuser"]=$mail;
//echo"successfuly inserted";

header ("location: employerprofile.php");
echo "
		 ";
}
?>
<!--<script language='javascript'>
			window.location='employerprofile.php';
		</script>-->