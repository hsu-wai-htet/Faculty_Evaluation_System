<?php
session_start();
include('../connect.php');
if(isset($_POST['btps']))
{
	$newps=$_POST['password'];
	 $facpro=$_SESSION['eid'];
	   $select1="UPDATE faculty set fps='$newps' where fid='$facpro' ";
	$run1=mysqli_query($conn,$select1);
	header("Location:teacher_profile.php");

}
?>