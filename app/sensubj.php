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
if ($_SESSION['newClass']=="SSS1") {
	$now=mysqli_query($con, "select * from student_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
	while ($no=mysqli_fetch_array($now)) {
		$id=$no['student_id'];
		$email=$no['email'];
		$class=$no['class'];
	}
	echo $id;
	$set=mysqli_query($con, "insert into sss_students_tb(student_id,school_id,school_mail,email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,class)values('$id', '$_SESSION[schools_id]', '$_SESSION[schools_email]','$email','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$class')");
	if ($set) {
		echo "<script>alert('Successsful')</script>";
		header("location:sss1.php");
	}
	else{
		echo mysqli_error($con);
	}
}

if ($_SESSION['newClass']=="SSS2") {
	$now=mysqli_query($con, "select * from student_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
	while ($no=mysqli_fetch_array($now)) {
		$id=$no['student_id'];
		$email=$no['email'];
		$class=$no['class'];
	}
	echo $id;
	$set=mysqli_query($con, "insert into sss_students_tb(student_id,school_id,school_mail,email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,class)values('$id', '$_SESSION[schools_id]', '$_SESSION[schools_email]','$email', '$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$class')");
	if ($set) {
		echo "<script>alert('Successsful')</script>";
		header("location:sss2.php");
	}
	else{
		echo mysqli_error($con);
	}
}

if ($_SESSION['newClass']=="SSS3") {
	$now=mysqli_query($con, "select * from student_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
	while ($no=mysqli_fetch_array($now)) {
		$id=$no['student_id'];
		$email=$no['email'];
		$class=$no['class'];
	}
	echo $id;
	$set=mysqli_query($con, "insert into sss_students_tb(student_id,school_id,school_mail,email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,class)values('$id', '$_SESSION[schools_id]', '$_SESSION[schools_email]','$email', '$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$class')");
	if ($set) {
		echo "<script>alert('Successsful')</script>";
		header("location:sss3.php");
	}
	else{
		echo mysqli_error($con);
	}
}






// if ($_SESSION['newClass']=='sss2') {
// 	echo "<script>alert('successsful')</script>";
// 	$now=mysqli_query($con, "select * from sss2_tb where email='$_SESSION[emails]' ");
// 	while ($no=mysqli_fetch_array($now)) {
// 		$id=$no['student_id'];
// 		$email=$no['email'];
// 	}
// 	$set=mysqli_query($con, "insert into scsss2_tb(student_id,email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11)values('$id','$email','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11')");
// 	if ($set) {
// 		header("location:sss2.php");
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}
// }
// if ($_SESSION['newClass']=='sss3') {
// 	echo "<script>alert('successsful')</script>";
// 	$now=mysqli_query($con, "select * from sss3_tb where email='$_SESSION[emails]' ");
// 	while ($no=mysqli_fetch_array($now)) {
// 		$id=$no['student_id'];
// 		$email=$no['email'];
// 	}
// 	$set=mysqli_query($con, "insert into scsss3_tb(student_id,email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11)values('$id','$email','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11')");
// 	if ($set) {
// 		header("location:sss3.php");
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}
// }
?>