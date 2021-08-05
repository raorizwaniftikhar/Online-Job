<?php

include("connection.php");


$bb=$_GET['jid'];
$sql="delete  from jobs where job_id=$bb " ;
//echo $sql;

$record=mysql_query($sql);
header("location:viewjob.php");
?>