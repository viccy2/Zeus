<?php
session_start();
require 'dc.php'; 
$email=$_POST['email'];
$surname= $_POST['surname'];
$_SESSION['cname'];
$edit=mysqli_query($con, "select * from student_tb where email='$email' and surname='$surname' ");
$log=true;
while ($wow=mysqli_fetch_array($edit)) {
		$id=$wow['student_id'];
		$_SESSION['student_id']=$id;
		$log=false;
}
if ($log) {
	$msg="Invalid email or password";
	include 'studentforgot.php';
}

else{
	header("location:stremember.php");
}

?>