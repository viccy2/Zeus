<?php
session_start();
require 'dc.php';
$color=$_POST['color'];
$set = mysqli_query($con,"update student_tb set color='$color' where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
if ($set) {
	echo "<script>alert('successful')</script>";
	$test=mysqli_query($con,"select * from student_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
	while ($we=mysqli_fetch_array($test)) {
		$_SESSION['color']=$we['color'];
	}
	header("location:dashboard1.php");
}

?>