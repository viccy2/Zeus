<?php
require 'dc.php';
session_start();
$surname = $_POST['sname'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email=    $_POST['email'];
$password =   sha1($_POST['sname']) ;
$phone =  $_POST['phone'] ;
$action = $_POST['part'];
$_SESSION['class']=$action;
$dates=$_POST['date'];
date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");
$class = $_POST['part'];
$town = $_POST['town'];
$state = $_POST['state'];
$address = $_POST['ad'];
$countries = $_POST['country'];
$_SESSION['newClass']=$class;
$_SESSION['emails']=$email;

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$fileType = $_FILES['fileToUpload']['type'];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
       // echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check file size
if ( $target_file > 900000) {
    $msgis="Sorry, your file is too large!!!";

     include'studentreg.php';
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 900000) {
    $msgis="Sorry, your file is too large!!!";
    include'studentreg.php';
    $uploadOk = 0;
}

if($imageFileType != 'jpg' and 'png' and 'jpeg' )
{
     $msgit="Sorry, your image type is unknown!!!";
     include'studentreg.php';
    
   
}


else{
if($action=='SSS1'){
    $set=mysqli_query($con, "insert into student_tb (school_id,school_mail,surname,firstname,lastname,email,password,parentNumber,admissionDate,date,time,passport,class,state,country,address,color)values('$_SESSION[schools_id]','$_SESSION[schools_email]','$surname','$firstname','$lastname', '$email','$password','$phone','$dates','$date','$time','$target_file','$action','$state','$countries','$address','#1d52ba')");
    if ($set) {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ;
        echo "<script>alert('successsful')</script>";
        include 'sensubject.php';
    }
    else{
        echo mysqli_error($con);
    }
}

if($action=='SSS2'){
$set=mysqli_query($con, "insert into student_tb (school_id,school_mail,surname,firstname,lastname,email,password,parentNumber,admissionDate,date,time,passport,class,state,country,address,color)values('$_SESSION[schools_id]','$_SESSION[schools_email]','$surname','$firstname','$lastname', '$email','$password','$phone','$dates','$date','$time','$target_file','$action','$state','$countries','$address','#1d52ba')");
    if ($set) {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ;
        echo "<script>alert('successsful')</script>";
        include 'sensubject.php';
    }
    else{
        echo mysqli_error($con);
    }
}
if($action=='SSS3'){
    $set=mysqli_query($con, "insert into student_tb (school_id,school_mail,surname,firstname,lastname,email,password,parentNumber,admissionDate,date,time,passport,class,state,country,address,color)values('$_SESSION[schools_id]','$_SESSION[schools_email]','$surname','$firstname','$lastname', '$email','$password','$phone','$dates','$date','$time','$target_file','$action','$state','$countries','$address','#1d52ba')");
    if ($set) {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ;
        echo "<script>alert('successsful')</script>";
        include 'sensubject.php';
    }
    else{
        echo mysqli_error($con);
    }
}

	$set=mysqli_query($con, "insert into student_tb (school_id,school_mail,surname,firstname,lastname,email,password,parentNumber,admissionDate,date,time,passport,class,state,country,address,color)values('$_SESSION[schools_id]','$_SESSION[schools_email]','$surname','$firstname','$lastname', '$email','$password','$phone','$dates','$date','$time','$target_file','$action','$state','$countries','$address','#1d52ba')");
	if ($set) {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ;
		echo "<script>alert('successsful')</script>";
		include 'subject.php';
	}
    else{
        echo mysqli_error($con);
    }
	
}

// if($action=='jss2'){
// 	$set=mysqli_query($con, "insert into jss2_tb (surname,firstname,lastname,email,password,parentNumber,admissionDate,date,time,passport,class)values('$surname','$firstname','$lastname', '$email','$password','$phone','$dates','$date','$time','$file','$action')");
// 	if ($set) {
// 		echo "<script>alert('successsful')</script>";
// 		include 'subject.php';
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}
// }
// if($action=='jss3'){
// 	$set=mysqli_query($con, "insert into jss3_tb (surname,firstname,lastname,email,password,parentNumber,admissionDate,date,time,passport,class)values('$surname','$firstname','$lastname', '$email','$password','$phone','$dates','$date','$time','$file','$action')");
// 	if ($set) {
// 		echo "<script>alert('successsful')</script>";
// 		include 'subject.php';
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}
// }








?>



