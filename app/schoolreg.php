<?php
session_start();
require 'dc.php';
$sn=$_POST['schoolname'];
$em=$_POST['email'];
$st=$_POST['state'];
$country=$_POST['country'];
date_default_timezone_get('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");
$_SESSION['school_email'] =$em;
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

     include'Zeus_school_registration_platform.php';
    $uploadOk = 0;
}

// Check if file already exists
// if (file_exists($target_file)) {
//     echo "<script>alert('Sorry, file already exists')</script>.";
//     include 'register.php';
//     $uploadOk = 0;
// }
// Check file size
// if ($_FILES["fileToUpload"]["size"] > 900000) {
//     $msgis="Sorry, your file is too large!!!";
//     include'Zeus_school_registration_platform.php';
//     $uploadOk = 0;
// }

if($imageFileType != 'jpg' and 'png' and 'jpeg' )
{
     $msgit="Sorry, your image type is unknown!!!";
     include'Zeus_school_registration_platform.php';
    
   
}

else{
	$save= mysqli_query($con,"insert into school_tb(schname,email,state,country,date,time,schpassport) values('$sn','$em','$st','$country','$date','$time','$target_file')");
    $sets=mysqli_query($con, "select * from school_tb where email='$em'");
    while ($u=mysqli_fetch_array($sets)) {
        $_SESSION['school_id'] = $u['school_id'];
        $_SESSION['school_passport']=$u['schpassport'];
    }
	if ($save) {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
		echo "<script>alert('Registration Successfull')</script>";
		include'schools_admin_masters.php';
       
	}

}

?>