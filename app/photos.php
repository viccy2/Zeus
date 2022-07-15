<?php
session_start();
require 'dc.php';
 $_SESSION['classes'];
 $_SESSION['emails'];

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
if ( $target_file > 90000000) {
    $msgis="Sorry, your file is too large!!!";

     include'photo.php';
    $uploadOk = 0;
}

// Check if file already exists
// if (file_exists($target_file)) {
//     echo "<script>alert('Sorry, file already exists')</script>.";
//     include 'register.php';
//     $uploadOk = 0;
// }
// Check file size
if ($_FILES["fileToUpload"]["size"] > 90000000) {
    $msgis="Sorry, your file is too large!!!";
    include'photo.php';
    $uploadOk = 0;
}

if($imageFileType != 'jpg' and 'png' and 'jpeg' )
{
     $msgit="Sorry, your image type is unknown!!!";
     include'photo.php';
    
   
}



else
{

$let=mysqli_query($con, "update student_tb set passport='$target_file' where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
if ($let) {
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ;
	echo "<script>alert('Changes Saved')</script>";
	$met=mysqli_query($con, "select * from student_tb where email='$_SESSION[emails]'");
	while ($r=mysqli_fetch_array($met)) {
		$_SESSION['passport']=$r['passport'];
	}
	include 'dashboard.php';
}
}
 

 
?>