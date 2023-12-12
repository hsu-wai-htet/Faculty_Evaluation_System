<?php

session_start();
include("../connect.php");

if(isset($_POST['save']))
{
$ques=$_POST['ques'];
$id=$_POST['id'];


}
$_SESSION['ques']=$ques;
$_SESSION['id']=$id;

header("Location:admin_question_update.php");
?>