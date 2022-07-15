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
$subject12= $_POST['subj12'];
$subject13= $_POST['subj13'];
$subject14= $_POST['subj14'];
$subject15= $_POST['subj15'];

if ($_SESSION['newClass']=="JSS1") {
	$now=mysqli_query($con, "select * from student_tb where email='$_SESSION[emails]' and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
	while ($no=mysqli_fetch_array($now)) {
		$id=$no['student_id'];
		$email=$no['email'];
		$class=$no['class'];
	}
	echo $id;
	$set=mysqli_query($con, "insert into jss_students_tb(student_id,school_id,school_mail,email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,class)values('$id', '$_SESSION[schools_id]', '$_SESSION[schools_email]','$email', '$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$class')");
	if ($set) {
		echo "<script>alert('Successsful')</script>";
		header("location:jss1.php");
	}
	else{
		echo mysqli_error($con);
	}
}


if ($_SESSION['newClass']=="JSS2") {
	$now=mysqli_query($con, "select * from student_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
	while ($no=mysqli_fetch_array($now)) {
		$id=$no['student_id'];
		$email=$no['email'];
		$class=$no['class'];
	}
	echo $id;
	$set=mysqli_query($con, "insert into jss_students_tb(student_id,school_id,school_mail,email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,class)values('$id', '$_SESSION[schools_id]', '$_SESSION[schools_email]', '$email', '$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$class')");
	if ($set) {
		echo "<script>alert('Successsful')</script>";
		header("location:jss2.php");
	}
	else{
		echo mysqli_error($con);
	}
}

if ($_SESSION['newClass']=="JSS3") {
	$now=mysqli_query($con, "select * from student_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]' ");
	while ($no=mysqli_fetch_array($now)) {
		$id=$no['student_id'];
		$email=$no['email'];
		$class=$no['class'];
	}
	echo $id;
	$set=mysqli_query($con, "insert into jss_students_tb(student_id,school_id,school_mail,email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,class)values('$id', '$_SESSION[schools_id]', '$_SESSION[schools_email]', '$email', '$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$class')");
	if ($set) {
		echo "<script>alert('Successsful')</script>";
		header("location:jss3.php");
	}
	else{
		echo mysqli_error($con);
	}
}



// if ($_SESSION['newClass']=='jss2') {
// 	echo "<script>alert('successsful')</script>";
// 	$now=mysqli_query($con, "select * from jss2_tb where email='$_SESSION[emails]' ");
// 	while ($no=mysqli_fetch_array($now)) {
// 		$id=$no['student_id'];
// 		$email=$no['email'];
// 	}
// 	$set=mysqli_query($con, "insert into scjss2_tb(student_id,email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15)values('$id','$email','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15')");
// 	if ($set) {
// 		echo "<script>alert('Successsful')</script>";
// 		header("location:jss2.php");
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}
// }

// if ($_SESSION['newClass']=='jss3') {
// 	echo "<script>alert('successsful')</script>";
// 	$now=mysqli_query($con, "select * from jss3_tb where email='$_SESSION[emails]' ");
// 	while ($no=mysqli_fetch_array($now)) {
// 		$id=$no['student_id'];
// 		$email=$no['email'];
// 	}
// 	$set=mysqli_query($con, "insert into scjss3_tb(student_id,email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15)values('$id','$email','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15')");
// 	if ($set) {
// 		echo "<script>alert('Successsful')</script>";
// 		header("location:jss3.php");
// 	}
	// else{
	// 	echo mysqli_error($con);
	// }





?>