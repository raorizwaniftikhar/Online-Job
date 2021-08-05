<?php
include("connection.php");


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
echo "Record save into the edu ";
	
$sql = "INSERT INTO `project`.`experience` (`institute`, `post`, `salary`, `starting_date`, `ending_date`, `reson_flj`, `nic_no`) VALUES ('$firm', '$pos', '$sal', '$sdate', '$edate', '$com', '$nic')";
$result=mysql_query($sql);
if($result)
echo "Record save into the exp ";

?>