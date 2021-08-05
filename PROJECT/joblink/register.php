
<?php


include("connection.php");


$dname=$_REQUEST["dname"];
$pw=$_REQUEST["psw1"];
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$mail=$_REQUEST["mail"];
$dob=$_REQUEST["dob"];
$gender=$_REQUEST["gender"];
$nic=$_REQUEST["nic"];
@$status=$_REQUEST["status"];
$religion=$_REQUEST["religion"];
$phone=$_REQUEST["phone"];
$mob=$_REQUEST["mob"];
$ad=$_REQUEST["add"];
$city=$_REQUEST["city"];
$country=$_REQUEST["country"];
$nationality =$_REQUEST["national"];


$sql = "INSERT INTO `project`.`user` (`nic_no`, `domain_name`, `password`, `f_name`, `l_name`, `mail_id`, `dob`, `gender`, `marital_status`, `religion`, `phone`, `mobile`, `address`, `city`, `country`, `nationality`) VALUES ('$nic', '$dname', '$pw', '$fname', '$lname', '$mail', '$dob', '$gender', '$status', '$religion', '$phone', '$mob', '$ad', '$city', '$country', '$nationality')";
$results = mysql_query($sql);

if($results)
{
//echo "successfuly inserted";
//else "not inserted";
//...............................education insertion..........
$insti=$_REQUEST["institute"];
$nic=$_REQUEST["nic"];
$deg=$_REQUEST["degree"];
$yr=$_REQUEST["year"];
$tm=$_REQUEST["tm"];
$om=$_REQUEST["om"];
//....................................experience insertion................
$firm=$_REQUEST["firm"];
$pos=$_REQUEST["post"];
$sal=$_REQUEST["salary"];
$sdate=$_REQUEST["sdate"];
$edate=$_REQUEST["edate"];
$com=$_REQUEST["comments"];

$sql2="INSERT INTO `project`.`education` (
`institute` ,
`degree_name` ,
`completion year` ,
`total_marks` ,
`obtain_marks` ,
`nic_no`
)
VALUES (
'$insti', '$deg', '$yr', '$tm', '$om', '$nic'
)";

	$result2 = mysql_query($sql2);
	if($result2)
	{
///echo "Record save into the edu ";
	
$sql = "INSERT INTO `project`.`experience` (`institute`, `post`, `salary`, `starting_date`, `ending_date`, `reson_flj`, `nic_no`) VALUES ('$firm', '$pos', '$sal', '$sdate', '$edate', '$com', '$nic')";
$result=mysql_query($sql);
if($result)
	{
	 session_start(); 
	$_SESSION["user"]=$dname;
	//echo "Record save into the exp ";
	echo "
		<script language='javascript'>
			window.location='currentjob.php';
		</script> ";
	}
}
}
?>
