<?php
include('../connect.php');
$sid=$_GET['id'];

$sql="DELETE from student where sid='$sid'";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "Successfully Deleted";
}
header("Location:admin_adddeleteMembers.php");
?>