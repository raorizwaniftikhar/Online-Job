<?php
 session_start(); 
$aa=$_SESSION["user"];
//echo $aa;
include("connection.php");

  if ($_FILES["file"]["error"] > 0)
    	{
    	echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    	}
  else
    	{
 
   		 if (file_exists("CV/" . $_FILES["file"]["name"]))
      		{
      		$c= $_FILES["file"]["name"] . " already exists. ";
	 
	   		header ("location: index.php");
     	  	}
    	else
      		{
     		 move_uploaded_file($_FILES["file"]["tmp_name"],
     		 "CV/" . $_FILES["file"]["name"]);
			//      echo "Stored in: " . "CV/" . $_FILES["file"]["name"];
	  
	  		$sql="select * from user where domain_name='$aa'";
			$result=mysql_query($sql);
	  		  $row=mysql_fetch_array($result);
			$id=$row['nic_no'];
			//		echo $id;
		
  			$subject  = $_REQUEST['subject'];
			$cv ="CV/".($_FILES['file']['name']); 
		
			$sql="INSERT INTO `project`.`uploaded_cvs` (
			`nic_no` ,
			`cv_subject` ,
			`cv`
			)
			VALUES ('$id', '$subject', '$cv')";

  			$result=mysql_query($sql);
  			if($result)
  					{
					//echo "succesfully";
	
					 header ("location: index.php");
					}
			else	
					{
				//	echo "not uploaded";
				header ("location: index.php");
					
					}
	
      		}
   	 }
?> 