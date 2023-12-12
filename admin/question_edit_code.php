<?php

include("../connect.php");
$name=$_POST['name'];
$id=$_POST['id'];


$sql="UPDATE question SET question='$name' WHERE qid='$id'";
$result=mysqli_query($conn,$sql) or die("coannt update");
header("Location:admin_giveQuestion.php");


?>
