<?php

$server="localhost";
$user="root";
$pass="";
$database="project";


@$connection=mysql_connect($server,$user,$pass) or die("cant connect to the serveer");

$link=mysql_select_db($database,$connection) or die("cant connect to the database");

?>