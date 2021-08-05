<?php

include("connection.php");


$aa=$_REQUEST['nic'];

$sql="DELETE FROM `project`.`user` WHERE `user`.`nic_no` = '$aa'";
$record=mysql_query($sql);

$sql2="DELETE FROM `project`.`education` WHERE `education`.`nic_no` = '$aa'";
$record2=mysql_query($sql2);

$sql3="DELETE FROM `project`.`experience` WHERE `experience`.`nic_no` = '$aa'";
$record3=mysql_query($sql3);

header("location:viewuser.php");
?>