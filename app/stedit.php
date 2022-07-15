<?php session_start();
if (isset($_SESSION['email'])) {
require 'dc.php';
$chatsid = $_GET['id'];
$_SESSION['ctid'] = $chatsid;
?>
<!DOCTYPE html>
  <html>
  <head>
  <title>Sign up</title>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width" initial-scale="1">


  <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">
  <script type="text/javascript" src="wowjs/dist/wow.min.js"></script>
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="bootstrap4/js/jquery-ui.css" />
   <link rel="stylesheet" type="text/css" href="student.css">
    <link rel="shortcut icon" href="images/graduate.png">
     <script type="text/javascript" src="tether/dist/js/tether.js"></script>
     <script type="text/javascript" src="bootstrap4/js/popper.js"></script>
     <script type="text/javascript" src="bootstrap4/js/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="bootstrap4/js/bootstrap.min.js"></script>
     
     <script>
        new WOW().init();
     </script>
     <style type="text/css">
     .star{  background: url(images/guy.jpg)   fixed;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    width: 100%;
    
    overflow: hidden;

}
.login-wrap{
  width:100%;
  margin:auto;
  max-width:525px;
  min-height:670px;
  position:relative;
  box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
 background: url()   fixed;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    width: 100%;
    
    overflow: hidden;
}
.login-html{
  width:100%;
  height:100%;
  position:absolute;
  padding:90px 70px 50px 70px;
  background:;
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
  top:0;
  left:0;
  right:0;
  bottom:0;
  position:absolute;
  -webkit-transform:rotateY(180deg);
          transform:rotateY(180deg);
  -webkit-backface-visibility:hidden;
          backface-visibility:hidden;
  transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
  display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
  text-transform:uppercase;
  text-align: center;
}
.login-html .tab{
  font-size:22px;
  margin-right:15px;
  padding-bottom:5px;
  margin:0 15px 10px 0;
  display:inline-block;
  border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
  color:#fff;
  border-color:#1161ee;
}
.login-form{
  min-height:345px;
  position:relative;
  -webkit-perspective:1000px;
          perspective:1000px;
  -webkit-transform-style:preserve-3d;
          transform-style:preserve-3d;
          text-align: center;
}
.login-form .group{
  margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
  width:100%;
  color:#fff;
  display:block;
}
.login-form .group .input,
.login-form .group .button{
  border:none;
  padding:15px 20px;
  border-radius:25px;
  background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
  text-security:circle;
  -webkit-text-security:circle;
}   
.login-form .group .label{
  color:#aaa;
  font-size:12px;
}
.login-form .group .button{
  background:#1d52ba;
}
.login-form .group label .icon{
  width:15px;
  height:15px;
  border-radius:2px;
  position:relative;
  display:inline-block;
  background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
  content:'';
  width:10px;
  height:2px;
  background:#fff;
  position:absolute;
  transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
  left:3px;
  width:5px;
  bottom:6px;
  -webkit-transform:scale(0) rotate(0);
          transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
  top:6px;
  right:0;
  -webkit-transform:scale(0) rotate(0);
          transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
  color:#fff;
}
.login-form .group .check:checked + label .icon{
  background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
  -webkit-transform:scale(1) rotate(45deg);
          transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
  -webkit-transform:scale(1) rotate(-45deg);
          transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
  -webkit-transform:rotate(0);
          transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
  -webkit-transform:rotate(0);
          transform:rotate(0);
}

.hr{
  height:2px;
  margin:60px 0 50px 0;
  background:#1d52ba;
}
.foot-lnk{
  text-align:center;
  margin-top: -70px;
}
     </style>
</head>

<body>
  <?php 
  require 'dc.php';  
 $info=mysqli_query($con,"select * from staffs_tb where staffs_id='$chatsid'and school_id = '$_SESSION[school_id]' and school_mail='$_SESSION[school_email]");
while ($tens=mysqli_fetch_array($info)) {
  $s=$tens['surname'];
  $f=$tens['firstname'];
  $l=$tens['lastname'];
  $pa=$tens['passport'];
  $ph=$tens['phone'];
  $a=$tens['address'];
   $t=$tens['town'];
    $st=$tens['state'];
     $c=$tens['country'];
}

  ?>
<center>
      
<div class="star" style="padding-top:-140px;height:70pc;color:#61445C;">

<a href="staffinfo.php" ><i class="fa fa-arrow-left fa-2x" style="width:40px;float:left;color:#1d52ba"></i></a>
<div class="star" style="padding-top:-140px;height:70pc;color:#61445C;">
     
   <div class="login-wrap" style="padding-top:-100px; height:70pc;">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
    <div style="color:red;text-align:center;font-size:20px;">
                
      </div>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab" style="text-align:center;color:white;">Edit Profile</label>
    <div class="login-form">
       <?php 
        
            if (isset($msgit)) {
              echo "<div class='alert alert-danger'>"."<marquee>".$msgit."</marquee>"."</div>";
              
            }
          ?>
           <?php 
            if (isset($msgis)) {
              echo "<div class='alert alert-danger'>"."<marquee>".$msgis."</marquee>"."</div>";
            }
          ?>
        <div class="group">
         <form action="ten.php" method="post" enctype="multipart/form-data">          
        <div class="group">
          
          <input id="pass" type="text" class="input" placeholder="Surname" name="sname" value="<?php echo $s ?>" required="true">
        </div>
         <div class="group">
          
          <input id="pass" type="text" class="input" placeholder="Firstname" name="fname" value="<?php echo $f ?>" required="true">
        </div>
         <div class="group">
          
          <input id="pass" type="text" class="input" placeholder="Lastname" name="lname" value="<?php echo $l ?>" required="true">
        </div>
          <div class="group">
          
          <input id="pass" type="text" class="input" placeholder="Contact" value="<?php echo $ph ?>" name="phone" required="true">
        </div>
          <div class="group">
          
          <input id="pass" type="text" class="input" placeholder="address" value="<?php echo $a ?>" name="address" required="true">
        </div>
          <div class="group">
          
          <input id="pass" type="text" class="input" placeholder="town" name="town"value="<?php echo $t ?>" required="true">
        </div>
          <div class="group">
          
          <input id="pass" type="text" class="input" placeholder="state" name="state" value="<?php echo $st ?>" required="true">
        </div>
          <div class="group">
          
          <input id="pass" type="text" class="input" placeholder="country" value="<?php echo $c ?>"name="country" required="true">
        </div>
         <label class="custom-file-upload">
            <input type="file" name="fileToUpload" id="files" hidden="hidden">
            <p style="color:white;background-color:#1d52ba"; class="btn">Select Profile Picture</p>
          </label>

        
        <div class="group">
          <input type="submit" class="button" value="Save Changes">
        </div>
        <div class="hr"></div>
         
</form>
      </div>

  </div>
</div>
</div>
</div>
</div>
</center>
</body>
</html>
<?php
 } 
 else{
 include 'schools_admin_masters_login.php';
 }
?>