<?php
include("../connect.php");

$fid=$_POST['id'];


$cover=$_FILES['image'];


$desfolder="../upload/";
$filename=time()."_".uniqid(rand());
$file_array=explode(".", $cover['name']);
$ext=end($file_array);
$desfile=$filename.".".$ext;
$despath=$desfolder.$desfile;
move_uploaded_file($cover['tmp_name'],$despath);


$sql="UPDATE faculty set fimage='$despath' where fid='$fid'";
$result=mysqli_query($conn,$sql);
header("Location:teacher_profile.php");



?>