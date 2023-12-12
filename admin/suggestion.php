<?php
 include('../connect.php');

 if(isset($_POST['button2']));

 {	
 	$query1 = "Select Max(suid) From suggestion ";
	$returnD1 = mysqli_query($conn, $query1);
	$result1 = mysqli_fetch_assoc($returnD1);
	$maxRows1 = $result1['Max(suid)'];
	if(empty($maxRows1)){
        $lastRow1 = $maxRows1 = 1;      
    }else{
		$lastRow1 = $maxRows1 + 1 ;

    }
    echo $lastRow1;



$fid=$_POST['id'];
 	$text=$_POST['suggestion'];
 	$date= date("Y/m/d");
 	
 	$select="INSERT INTO suggestion (suid,fid,advice,SDate)
 	VALUES('$lastRow1','$fid','$text','$date')";
 	$run=mysqli_query($conn,$select);
 
 	if($run)
 	{
 		header("Location:admin_give_rating1.php");
 	}


 }

?>