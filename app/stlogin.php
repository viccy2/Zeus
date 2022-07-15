<?php session_start();
require 'dc.php'; 
$email=$_POST['email'];
$password= sha1($_POST['password']);
	$result=mysqli_query($con, "select * from adminstaff_tb where email='$email' and password ='$password' and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
	$log=true;
	while ($wow=mysqli_fetch_array($result)) {
		$_SESSION['use']=$wow['surname'];
		 $passport=$wow['passport'];
  		$_SESSION['passpor']=$passport;
		$log=false;
	}
	if ($log) {
	$msg="Invalid email or password";
	include 'schools_admin_staff_login.php';
 	
	}
	else{
		$_SESSION['email'] =$email;
		header("location:index.php");
	}



 ?>