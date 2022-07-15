<?php
session_start();
require 'dc.php';
$email=$_POST['email'];
$_SESSION['student_id'];
$password= sha1($_POST['password']);
$pass= sha1($_POST['pass']);
if ($password==$pass) {
$edit = mysqli_query($con, "update student_tb set password ='$password' where student_id= '$_SESSION[student_id]'");
	 if ($edit) {
	 echo "<script>alert('Changes Saved')</script>";
	 include 'studentlogin.php';
	 }

}
 
else{
	$msg="Password don't match !!!";
	include 'stremember.php';
}

?>