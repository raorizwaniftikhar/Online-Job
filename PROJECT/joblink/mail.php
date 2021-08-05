<?php

session_start();
if(!(isset($_SESSION["user"])))
{
header("location:jobseeker.html");
}
else{

$aa=$_SESSION["user"];
echo $aa;
include("connection.php");
$jj=$_REQUEST['jid'];

 $sql="select * from user where domain_name='$aa'";
		$result=mysql_query($sql);
	    while($row=mysql_fetch_array($result))
		{
		$id=$row['nic_no'];
		$from=$row['mail_id'];
		}
		$sq="select * from user where nic_no='$id'";
		$res=mysql_query($sq);
	    while(@$row=mysql_fetch_array($res))
		{
		@$subject=$row['cv_subject'];
		@$cv=$row['cv'];
		}
@$to ="wasim_bzu@yahoo.com";


@$headers = "From: $from";
mail($to,$subject,$cv,$headers);

$sql2="select * from user where domain_name='$aa'";
		$result2=mysql_query($sql2);
	    while($row=mysql_fetch_array($result2))
		$id=$row['nic_no'];


$qu = "INSERT INTO `project`.`u_applied_job` (
`nic` ,
`job_id`
)
VALUES (
'$id', '$jj'
)";
$res2=mysql_query($qu);
/*echo "
		<script language='javascript'>
			window.location='currentjob.php?jid=$jj';
		</script> ";*/

//echo "";
header ("location: resume.php");
echo "Mail Sent.";
}
?> 
<!--<script language='javascript'>
			window.location='resume.php';
		</script>-->