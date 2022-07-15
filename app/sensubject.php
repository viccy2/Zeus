<?php session_start();
if (isset($_SESSION['email'])) {
?>
<!DOCTYPE html>
  <html>
  <head>
  <title>Subject</title>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width" initial-scale="1">


  <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">
  <script type="text/javascript" src="wowjs/dist/wow.min.js"></script>
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="bootstrap4/js/jquery-ui.css" />
   <link rel="stylesheet" type="text/css" href="sensubject.css">
    <link rel="shortcut icon" href="images/graduate.png">
     <script type="text/javascript" src="tether/dist/js/tether.js"></script>
     <script type="text/javascript" src="bootstrap4/js/popper.js"></script>
     <script type="text/javascript" src="bootstrap4/js/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="bootstrap4/js/bootstrap.min.js"></script>
     
     <script>
        new WOW().init();
     </script>
     <style type="text/css">
     </style>
</head>
<body>
 <header class="header">
        <nav class="navbar fixed-top" style="background-color:#1d52ba;">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.php" class="navbar-brand">
                  <div class="brand-text  d-md-inline-block"><strong class="text" style="color:white;">ZEUS School</strong><span> </span></div></a></div>
             <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

              
                <!-- Log out-->
                
              </ul>
            </div>
          </div>
        </nav>
      </header>
<div class="appointment" id="appointment">
<div class="container-fluid  py-md-3">
<div class="row">
<div class="col-md-5 about-bottoml-agileits">
    </div>
    <div class="col-md-7 about-bottomr-agileits">
      <div class="appointment_head">
        <h3>Student Subject Platform(Senior Class) </h3>
      </div>
        <div class="form-agileits">
        <form action="sensubj.php" method="post">
        <h6>Subjects Offered</h6>
         <input class="name" type="text" name="subj1" placeholder="Subject" required="">
            <input class="name" type="text" name="subj2" placeholder="Subject" required="">
            <input type="text" name="subj3" placeholder="Subject" required="">
            <input class="name" type="text" name="subj4" placeholder="Subject" required="">
            <input class="name" type="text" name="subj5" placeholder="Subject" required="">
             <input class="name" type="text" name="subj6" placeholder="Subject" required="">
             <input class="name" type="text" name="subj7" placeholder="Subject" required="">
            <input class="name" type="text" name="subj8" placeholder="Subject" required="">
            <input class="name" type="text" name="subj9" placeholder="Subject" required="">
           <input class="name" type="text" name="subj10" placeholder="Subject" required="">
           <input class="name" type="text" name="subj11" placeholder="Subject" required="">
            
   
            <div class="wthree-text"> 
             
              <div class="clearfix"> </div>
            </div>
            <input type="submit" value="Submit" style=" background:#1d52ba;border-color:#1d52ba">
        </form>
        </div>
    </div>
    <div class="clearfix"> </div>
    </div>
    </div>
</div>
<script src="bootstrap4/js/jquery-ui.js"></script>
          <script>
              $(function() {
              $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
              });
          </script>
     </body>

     </html>
     <?php
 } 
 else{
 include 'schools_admin_staff_master_login.php';
 }
?>