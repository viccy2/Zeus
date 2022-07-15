<?php session_start();
require 'dc.php'; 
$email=$_POST['email'];
$_SESSION['emails']=$email;
$password= sha1($_POST['password']);
$act = $_POST['par'];
$_SESSION['termses']=$_POST['par'];

	$result=mysqli_query($con, "select * from student_tb where email='$email' and password ='$password' ");
	$log=true;
	while ($wow=mysqli_fetch_array($result)) {
		  $username=$wow['surname'];
  		$_SESSION['user']=$username;
  		 $users=$wow['firstname'];
  		$_SESSION['users']=$users;
  		 $passport=$wow['passport'];
  		$_SESSION['passport']=$passport;
  		$_SESSION['classes']=$wow['class'];
  		$_SESSION['color']=$wow['color'];
  		$_SESSION['schools_id']=$wow['school_id'];
  		$_SESSION['schools_email']=$wow['school_mail'];
		$log=false;
	}
	if ($log) {
		$msg= '!!! Incorrect Log-In. Recheck<br><br>';
 	include ('studentlogin.php');
	}
	else{
		$test=mysqli_query($con, "select * from school_tb where email = '$_SESSION[schools_email]' and school_id = $_SESSION[schools_id]");
		while ($he=mysqli_fetch_array($test)) {
			$_SESSION['schools_name']=$he['schname'];
			$_SESSION['schools_passport']=$he['schpassport'];
		}
		// echo $_SESSION['schools_id'];
		// echo $_SESSION['schools_email'];
		// echo $_SESSION['email'] =$email;
		// echo $_SESSION['schools_name'];
		// echo $_SESSION['schools_passport'];
		header("location:dashboard1.php");
	}


 ?>