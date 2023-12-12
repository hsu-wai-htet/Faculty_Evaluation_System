<?php
include('../connect.php');
$fid=$_GET['id'];

$sql="DELETE from faculty where fid='$fid'";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "Successfully Deleted";
}
header("Location:admin_adddeleteMembers.php");
?>