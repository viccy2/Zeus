<?php
session_start();
require 'dc.php';
$old =  sha1($_POST['password']);
$new =  sha1($_POST['passwor']);
// echo $_SESSION['classes'];
//  echo $_SESSION['emails'];
if ($old == $new) {

 	
	$set=mysqli_query($con, "update student_tb set password = '$new' where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
	if ($set) {
		echo "<script>alert('Changes Saved')</script>";
		include 'logouts.php';
	}

 	
 

  
}

else{
	echo "<script>alert('incorrect password')</script>";
	include 'reset.php';
}





?>