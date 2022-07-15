<?php
session_start();
require 'dc.php';
$surname = $_POST['sname'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email=    $_POST['email'];
$password =   sha1($_POST['password']) ;
$phone=$_POST['phone'];
$address=$_POST['address'];
$town=$_POST['town'];
$state=$_POST['state'];
$country=$_POST['country'];
date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");

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

     include'staffreg.php';
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
//     include'staffreg.php';
//     $uploadOk = 0;
// }

if($imageFileType != 'jpg' and 'png' and 'jpeg' )
{
     $msgit="Sorry, your image type is unknown!!!";
     include'staffreg.php';
    
   
}

else{
$save = mysqli_query($con,"insert into staffs_tb (school_id,school_mail,surname,firstname,lastname,email,password,passport,phone,address,town,state,country,date,time) values('$_SESSION[school_id]','$_SESSION[school_email]','$surname','$firstname','$lastname', '$email','$password','$target_file','$phone', '$address','$town','$state','$country', '$date', '$time')");
if ($save) {
 move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ;
    $_SESSION['email']=$email;
	echo "<script>alert('successsful')</script>";
	header("location:schools_admin_masters_dashboards.php");
}
else{
	echo mysqli_error($con);
}
}
?>