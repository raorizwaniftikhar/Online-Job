<?php
// sirf query mein galti hei
include("connection.php");


$aa=$_REQUEST['cid'];
//echo $aa;
$sql="delete from company where company_id=$aa ";
//echo $sql;

$record=mysql_query($sql);
header("location:viewcompany.php");
?>