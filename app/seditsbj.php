<?php 
session_start();
require 'dc.php';
$subject1 = $_POST['subj1'];
$subject2 = $_POST['subj2'];
$subject3 = $_POST['subj3'];
$subject4 = $_POST['subj4'];
$subject5 = $_POST['subj5'];
$subject6= $_POST['subj6'];
$subject7= $_POST['subj7'];
$subject8= $_POST['subj8'];
$subject9= $_POST['subj9'];
$subject10= $_POST['subj10'];
$subject11= $_POST['subj11'];
$id =$_SESSION['ctid'];
echo $subject1;
echo $id;

	$set=mysqli_query($con, "update sss_students_tb set subject1 ='$subject1',subject2 ='$subject2',subject3 ='$subject3',subject4 ='$subject4',subject5 ='$subject5',subject6 ='$subject6',subject7 ='$subject7',subject8='$subject8',subject9='$subject9',subject10='$subject10',subject11='$subject11' where student_id='$id'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
	if ($set) {
		echo "<script>alert('successsful')</script>";
		include 'sss1.php';
	}
	else{
		echo mysqli_error($con);
	}




?>