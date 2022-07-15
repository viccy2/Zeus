<?php session_start();
if (isset($_SESSION['emails'] )) {
  $t=$_SESSION['color'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/mains.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="images/graduate.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <link rel="stylesheet" href="css/colorpicker/colorpicker.css">
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar" style="background-color:<?php echo $_SESSION['color']?>">
      <div class="side-navbar-wrapper" >
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center" style="background-color:<?php echo $_SESSION['color']?>">
          <!-- User Info-->
         <div class="sidenav-header-inner text-center" style="background-color:<?php echo $_SESSION['color']?>">
           <?php echo "<img src='".$_SESSION['schools_passport']."'  style='width:60px;height:60px;border-radius: 50%' >";?>
            <h2 class="h5"><?php echo $_SESSION['user']; ?></h2><span style="color:white"><?php echo $_SESSION['users']; ?></span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"></p></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="dashboard1.php"> <i class="fa fa-home"></i>Home </a></li>
            <li><a href="schoolfees.php"> <i class="fa fa-bar-chart"></i>School Fees </a></li> 
            <li><a href="#"> <i class="fa fa-bar-chart"></i>Result </a></li> 
          </ul>
        </div>
       
       
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header" >
        <nav class="navbar" style="background-color:<?php echo $_SESSION['color']?>;">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between" style="background-color:<?php echo $_SESSION['color']?>">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn" style="background-color:white;color:<?php echo $_SESSION['color']?>"><i class="fa fa-bars"> </i></a><a href="dashboard1.php" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span><?php echo $_SESSION['schools_name']; ?> </span><strong class="text-primary">Dashboard (Student)</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages dropdown-->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul>
                </li>
                <!-- Languages dropdown    -->
               
                <!-- Log out-->
                <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"> <?php echo "<img src='".$_SESSION['passport']."'  style='width:40px;height:40px;border-radius: 50%' >";?></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 style="text-align:center"><?php echo $_SESSION['user']; ?> </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="logouts.php"><i class="fa fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
            </div>
          </div>
        </nav>
      </header>
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard1.php">Home</a></li>
          
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 " style="color:<?php echo $_SESSION['color']?>">Student Result </h1>
           <h1 style="color:<?php echo $_SESSION['color']?>text-align:center"> <?php echo $_SESSION['termses']; ?></h1>
          </header>
          <div class='btn' style='color:white;background-color:<?php echo $_SESSION['color']?>;' onclick="save()">Print Result </div>
          <div class="row">
            <div class="" style="width:100%;">
              <div class="card">
  <script type="text/javascript">
    function save(argument) {
    window.print();
    }
  </script>
<?php 
require 'dc.php';
$_SESSION['classes'];

                   // < SSS CLASSES 1st Term>

 $yet = mysqli_query($con, "select * from sss_students_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
  while ($so = mysqli_fetch_array($yet)) {
    $sbj1=$so['subject1'];
    $sbj2=$so['subject2'];
   $sbj3=$so['subject3'];
    $sbj4=$so['subject4'];
     $sbj5=$so['subject5'];
     $sbj6=$so['subject6'];
     $sbj7=$so['subject7'];
     $sbj8=$so['subject8'];
     $sbj9=$so['subject9'];
    $sbj10=$so['subject10'];
   $sbj11=$so['subject11'];
  
  }

 $result = mysqli_query($con, "select * from sreport_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]' and type='C.A Test1' and term='1st Term'");
 while ($r = mysqli_fetch_array($result)) {
  $id = $r ['report_id'];
  $r['total'];
  $r['subject1'];
  $r['subject2'];
  $r['subject3'];
  $r['subject4'];
  $r['subject5'];
  $r['subject6'];
  $r['subject7'];
  $r['subject8'];
  $r['subject9'];
  $r['subject10'];
  $r['subject11'];
  


   $results = mysqli_query($con, "select * from sreport_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]' and type='C.A Test2' and term = '1st Term'");
 while ($re = mysqli_fetch_array($results)) {
  $re['total'];
  $re['subject1'];
  $re['subject2'];
  $re['subject3'];
  $re['subject4'];
  $re['subject5'];
  $re['subject6'];
  $re['subject7'];
  $re['subject8'];
  $re['subject9'];
  $re['subject10'];
  $re['subject11'];
  


   $resul = mysqli_query($con, "select * from sreport_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]' and type='Exam' and term = '1st Term'");
 while ($rest = mysqli_fetch_array($resul)) {
  $rest['total'];
  $rest['subject1'];
  $rest['subject2'];
  $rest['subject3'];
  $rest['subject4'];
  $rest['subject5'];
  $rest['subject6'];
  $rest['subject7'];
  $rest['subject8'];
  $rest['subject9'];
  $rest['subject10'];
  $rest['subject11'];
 

    $sets = mysqli_query($con, "select * from stotal_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]' and term = '1st Term'");
 while ($t = mysqli_fetch_array($sets)) {
  $t['total'];
  $t['subject1'];
  $t['subject2'];
  $t['subject3'];
  $t['subject4'];
  $t['subject5'];
  $t['subject6'];
  $t['subject7'];
  $t['subject8'];
  $t['subject9'];
  $t['subject10'];
  $t['subject11'];
  $t['grade'];

   $grade = mysqli_query($con, "select * from sgrade_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'and term = '1st Term'");
 while ($gra = mysqli_fetch_array($grade)) {
  $gra['subject1'];
  $gra['subject2'];
  $gra['subject3'];
  $gra['subject4'];
  $gra['subject5'];
  $gra['subject6'];
  $gra['subject7'];
  $gra['subject8'];
  $gra['subject9'];
  $gra['subject10'];
  $gra['subject11'];
 

    $position = mysqli_query($con, "select * from sposition_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'and term = '1st Term'");
 while ($pos = mysqli_fetch_array($position)) {
  $pos['subject1'];
  $pos['subject2'];
  $pos['subject3'];
  $pos['subject4'];
  $pos['subject5'];
  $pos['subject6'];
  $pos['subject7'];
  $pos['subject8'];
  $pos['subject9'];
  $pos['subject10'];
  $pos['subject11'];
 $t = $_SESSION['color']; 

  echo "

<div class='table-responsive' style='width:100%'>
  <div class='h3 text-center' style='color: $t;margin-top:50px'> 1st Term </div>
                    <table class='table table-striped'>
                        <tr style='background-color:$t;color:white'>
                          <th>Subjects</th>
                          <th>C A 1 (".$r['total'].")%</th>
                          <th>C A 2 (".$re['total'].")%</th>
                          <th>Exam (".$rest['total'].")%</th>
                          <th>Total (100)%</th>
                          <th>Grade</th>
                          <th>Position(Subject)</th>
                          <th>Position In Class</th>

                        </tr>
                        <tr>
                        
                        <th style='color:$t'> $sbj1</th>
                      <th style='color:$t'> ".$r['subject1']."</th>
                       <th style='color:$t'> ".$re['subject1']."</th>
                        <th style='color:$t'> ".$rest['subject1']."</th>
                        <th style='color:$t'> ".$t['subject1']."</th>
                         <th style='color:$t'> ".$gra['subject1']."</th>
                       <th style='color:$t'> ".$pos['subject1']."</th>
                          <th style='color:$t'> ".$t['grade']."</th>

                        </tr>
                        <tr>
                        <th style='color:$t;'> $sbj2</th>
                          <th style='color:$t;'> ".$r['subject2']."</th>
                          <th style='color:$t;'> ".$re['subject2']."</th>
                           <th style='color:$t;'> ".$rest['subject2']."</th>
                           <th style='color:$t;'> ".$t['subject2']."</th>
                            <th style='color:$t;'> ".$gra['subject2']."</th>
                           <th style='color:$t;'> ".$pos['subject2']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj3</th>
                          <th style='color:$t;'> ".$r['subject3']."</th>
                          <th style='color:$t;'> ".$re['subject3']."</th>
                           <th style='color:$t;'> ".$rest['subject3']."</th>
                           <th style='color:$t;'> ".$t['subject3']."</th>
                            <th style='color:$t;'> ".$gra['subject3']."</th>
                         <th style='color:$t;'> ".$pos['subject3']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj4</th>
                      <th style='color:$t;'> ".$r['subject4']."</th>
                      <th style='color:$t;'> ".$re['subject4']."</th>
                       <th style='color:$t;'> ".$rest['subject4']."</th>
                       <th style='color:$t;'> ".$t['subject4']."</th>
                       <th style='color:$t;'> ".$gra['subject4']."</th>
                       <th style='color:$t;'> ".$pos['subject4']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj5</th>
                        <th style='color:$t;'> ".$r['subject5']."</th>
                        <th style='color:$t;'> ".$re['subject5']."</th>
                         <th style='color:$t;'> ".$rest['subject5']."</th>
                         <th style='color:$t;'> ".$t['subject5']."</th>
                         <th style='color:$t;'> ".$gra['subject5']."</th>
                       <th style='color:$t;'> ".$pos['subject5']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj6</th>
                        <th style='color:$t;'> ".$r['subject6']."</th>
                        <th style='color:$t;'> ".$re['subject6']."</th>
                       <th style='color:$t;'> ".$rest['subject6']."</th>
                       <th style='color:$t;'> ".$t['subject6']."</th>
                       <th style='color:$t;'> ".$gra['subject6']."</th>
                       <th style='color:$t;'> ".$pos['subject6']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj7</th>
                        <th style='color:$t;'> ".$r['subject7']."</th>
                        <th style='color:$t;'> ".$re['subject7']."</th>
                       <th style='color:$t;'> ".$rest['subject7']."</th>
                       <th style='color:$t;'> ".$t['subject7']."</th>
                       <th style='color:$t;'> ".$gra['subject7']."</th>
                       <th style='color:$t;'> ".$pos['subject7']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj8</th>
                        <th style='color:$t;'> ".$r['subject8']."</th>
                        <th style='color:$t;'> ".$re['subject8']."</th>
                       <th style='color:$t;'> ".$rest['subject8']."</th>
                       <th style='color:$t;'> ".$t['subject8']."</th>
                       <th style='color:$t;'> ".$gra['subject8']."</th>
                       <th style='color:$t;'> ".$pos['subject8']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj9</th>
                        <th style='color:$t;'> ".$r['subject9']."</th>
                        <th style='color:$t;'> ".$re['subject9']."</th>
                       <th style='color:$t;'> ".$rest['subject9']."</th>
                       <th style='color:$t;'> ".$t['subject9']."</th>
                       <th style='color:$t;'> ".$gra['subject9']."</th>
                         <th style='color:$t;'> ".$pos['subject9']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj10</th>
                        <th style='color:$t;'> ".$r['subject10']."</th>
                        <th style='color:$t;'> ".$re['subject10']."</th>
                       <th style='color:$t;'> ".$rest['subject10']."</th>
                       <th style='color:$t;'> ".$t['subject10']."</th>
                       <th style='color:$t;'> ".$gra['subject10']."</th>
                         <th style='color:$t;'> ".$pos['subject10']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj11</th>
                      <th style='color:$t;'> ".$r['subject11']."</th>
                      <th style='color:$t;'> ".$re['subject11']."</th>
                     <th style='color:$t;'> ".$rest['subject11']."</th>
                     <th style='color:$t;'> ".$t['subject11']."</th>
                     <th style='color:$t;'> ".$gra['subject11']."</th>
                       <th style='color:$t;'> ".$pos['subject11']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj12</th>
                      <th style='color:$t;'> ".$r['subject12']."</th>
                      <th style='color:$t;'> ".$re['subject12']."</th>
                       <th style='color:$t;'> ".$rest['subject12']."</th>
                       <th style='color:$t;'> ".$t['subject12']."</th>
                       <th style='color:$t;'> ".$gra['subject12']."</th>
                       <th style='color:$t;'> ".$pos['subject12']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj13</th>
                      <th style='color:$t;'> ".$r['subject13']."</th>
                      <th style='color:$t;'> ".$re['subject13']."</th>
                     <th style='color:$t;'> ".$rest['subject13']."</th>
                     <th style='color:$t;'> ".$t['subject13']."</th>
                     <th style='color:$t;'> ".$gra['subject13']."</th>
                     <th style='color:$t;'> ".$pos['subject13']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj14</th>
                      <th style='color:$t;'> ".$r['subject14']."</th>
                      <th style='color:$t;'> ".$re['subject14']."</th>
                     <th style='color:$t;'> ".$rest['subject14']."</th>
                     <th style='color:$t;'> ".$t['subject14']."</th>
                     <th style='color:$t;'> ".$gra['subject14']."</th>
                   <th style='color:$t;'> ".$pos['subject14']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj15</th>
                      <th style='color:$t;'> ".$r['subject15']."</th>
                      <th style='color:$t;'> ".$re['subject15']."</th>
                       <th style='color:$t;'> ".$rest['subject15']."</th>
                       <th style='color:$t;'> ".$t['subject15']."</th>
                       <th style='color:$t;'> ".$gra['subject15']."</th>
                       <th style='color:$t;'> ".$pos['subject15']."</th>
                           </tr>
                      
                      <tbody>
                       
                        
                      </tbody>
                 ";
}
}
}
}             
}
}

echo "   </table>
                  </div>

                ";
            //<SSS CLASSES 2ND TERM>





          //<SSS CLASSES 3RD TERM>

 
          //<JSS CLASSSES 1ST TERM>

  $yet = mysqli_query($con, "select * from jss_students_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
  while ($so = mysqli_fetch_array($yet)) {
    $sbj1=$so['subject1'];
    $sbj2=$so['subject2'];
   $sbj3=$so['subject3'];
    $sbj4=$so['subject4'];
     $sbj5=$so['subject5'];
     $sbj6=$so['subject6'];
     $sbj7=$so['subject7'];
     $sbj8=$so['subject8'];
     $sbj9=$so['subject9'];
    $sbj10=$so['subject10'];
   $sbj11=$so['subject11'];
   $sbj12=$so['subject12'];
   $sbj13=$so['subject13'];
   $sbj14=$so['subject14'];
  $sbj15=$so['subject15'];
  }

 $result = mysqli_query($con, "select * from report_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]' and type='C.A Test1' and term = '1st Term'");
 while ($r = mysqli_fetch_array($result)) {
  $id = $r ['report_id'];
  $r['total'];
  $r['subject1'];
  $r['subject2'];
  $r['subject3'];
  $r['subject4'];
  $r['subject5'];
  $r['subject6'];
  $r['subject7'];
  $r['subject8'];
  $r['subject9'];
  $r['subject10'];
  $r['subject11'];
  $r['subject12'];
  $r['subject13'];
  $r['subject14'];
  $r['subject15'];


   $results = mysqli_query($con, "select * from report_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]' and type='C.A Test2' and term = '1st Term'");
 while ($re = mysqli_fetch_array($results)) {
  $re['total'];
  $re['subject1'];
  $re['subject2'];
  $re['subject3'];
  $re['subject4'];
  $re['subject5'];
  $re['subject6'];
  $re['subject7'];
  $re['subject8'];
  $re['subject9'];
  $re['subject10'];
  $re['subject11'];
  $re['subject12'];
  $re['subject13'];
  $re['subject14'];
  $re['subject15'];


   $resul = mysqli_query($con, "select * from report_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]' and type='Exam' and term = '1st Term'");
 while ($rest = mysqli_fetch_array($resul)) {
  $rest['total'];
  $rest['subject1'];
  $rest['subject2'];
  $rest['subject3'];
  $rest['subject4'];
  $rest['subject5'];
  $rest['subject6'];
  $rest['subject7'];
  $rest['subject8'];
  $rest['subject9'];
  $rest['subject10'];
  $rest['subject11'];
  $rest['subject12'];
  $rest['subject13'];
  $rest['subject14'];
  $rest['subject15'];

    $sets = mysqli_query($con, "select * from total_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]' and term = '1st Term'");
 while ($t = mysqli_fetch_array($sets)) {
  $t['total'];
  $t['subject1'];
  $t['subject2'];
  $t['subject3'];
  $t['subject4'];
  $t['subject5'];
  $t['subject6'];
  $t['subject7'];
  $t['subject8'];
  $t['subject9'];
  $t['subject10'];
  $t['subject11'];
  $t['subject12'];
  $t['subject13'];
  $t['subject14'];
  $t['subject15'];
  $t['position'];

   $grade = mysqli_query($con, "select * from grade_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'and term = '1st Term'");
 while ($gra = mysqli_fetch_array($grade)) {
  $gra['subject1'];
  $gra['subject2'];
  $gra['subject3'];
  $gra['subject4'];
  $gra['subject5'];
  $gra['subject6'];
  $gra['subject7'];
  $gra['subject8'];
  $gra['subject9'];
  $gra['subject10'];
  $gra['subject11'];
  $gra['subject12'];
  $gra['subject13'];
  $gra['subject14'];
  $gra['subject15'];

    $position = mysqli_query($con, "select * from position_tb where email='$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'and term = '1st Term'");
 while ($pos = mysqli_fetch_array($position)) {
  $pos['subject1'];
  $pos['subject2'];
  $pos['subject3'];
  $pos['subject4'];
  $pos['subject5'];
  $pos['subject6'];
  $pos['subject7'];
  $pos['subject8'];
  $pos['subject9'];
  $pos['subject10'];
  $pos['subject11'];
  $pos['subject12'];
  $pos['subject13'];
  $pos['subject14'];
  $pos['subject15'];

$t=$_SESSION['color'];
  echo "

  <div class='table-responsive' style='width:100%' >
  <div class='h3 text-center' style='color:$t;'> 1st Term </div>
                    <table class='table table-striped'>
                        <tr style='background-color:$t;color:white'>
                          <th>Subjects</th>
                          <th>C A 1 (".$r['total'].")%</th>
                          <th>C A 2 (".$re['total'].")%</th>
                          <th>Exam (".$rest['total'].")%</th>
                          <th>Total (100)%</th>
                          <th>Grade</th>
                          <th>Position(Subject)</th>
                          <th>Position In Class</th>

                        </tr>
                        <tr>
                        
                        <th style='color:$t;'> $sbj1</th>
                      <th style='color:$t;'> ".$r['subject1']."</th>
                       <th style='color:$t;'> ".$re['subject1']."</th>
                        <th style='color:$t;'> ".$rest['subject1']."</th>
                        <th style='color:$t;'> ".$t['subject1']."</th>
                         <th style='color:$t;'> ".$gra['subject1']."</th>
                       <th style='color:$t;'> ".$pos['subject1']."</th>
                          <th style='color:$t;'> ".$t['position']."</th>

                        </tr>
                        <tr>
                        <th style='color:$t;'> $sbj2</th>
                          <th style='color:$t;'> ".$r['subject2']."</th>
                          <th style='color:$t;'> ".$re['subject2']."</th>
                           <th style='color:$t;'> ".$rest['subject2']."</th>
                           <th style='color:$t;'> ".$t['subject2']."</th>
                            <th style='color:$t;'> ".$gra['subject2']."</th>
                           <th style='color:$t;'> ".$pos['subject2']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj3</th>
                          <th style='color:$t;'> ".$r['subject3']."</th>
                          <th style='color:$t;'> ".$re['subject3']."</th>
                           <th style='color:$t;'> ".$rest['subject3']."</th>
                           <th style='color:$t;'> ".$t['subject3']."</th>
                            <th style='color:$t;'> ".$gra['subject3']."</th>
                         <th style='color:$t;'> ".$pos['subject3']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj4</th>
                      <th style='color:$t;'> ".$r['subject4']."</th>
                      <th style='color:$t;'> ".$re['subject4']."</th>
                       <th style='color:$t;'> ".$rest['subject4']."</th>
                       <th style='color:$t;'> ".$t['subject4']."</th>
                       <th style='color:$t;'> ".$gra['subject4']."</th>
                       <th style='color:$t;'> ".$pos['subject4']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj5</th>
                        <th style='color:$t;'> ".$r['subject5']."</th>
                        <th style='color:$t;'> ".$re['subject5']."</th>
                         <th style='color:$t;'> ".$rest['subject5']."</th>
                         <th style='color:$t;'> ".$t['subject5']."</th>
                         <th style='color:$t;'> ".$gra['subject5']."</th>
                       <th style='color:$t;'> ".$pos['subject5']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj6</th>
                        <th style='color:$t;'> ".$r['subject6']."</th>
                        <th style='color:$t;'> ".$re['subject6']."</th>
                       <th style='color:$t;'> ".$rest['subject6']."</th>
                       <th style='color:$t;'> ".$t['subject6']."</th>
                       <th style='color:$t;'> ".$gra['subject6']."</th>
                       <th style='color:$t;'> ".$pos['subject6']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj7</th>
                        <th style='color:$t;'> ".$r['subject7']."</th>
                        <th style='color:$t;'> ".$re['subject7']."</th>
                       <th style='color:$t;'> ".$rest['subject7']."</th>
                       <th style='color:$t;'> ".$t['subject7']."</th>
                       <th style='color:$t;'> ".$gra['subject7']."</th>
                       <th style='color:$t;'> ".$pos['subject7']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj8</th>
                        <th style='color:$t;'> ".$r['subject8']."</th>
                        <th style='color:$t;'> ".$re['subject8']."</th>
                       <th style='color:$t;'> ".$rest['subject8']."</th>
                       <th style='color:$t;'> ".$t['subject8']."</th>
                       <th style='color:$t;'> ".$gra['subject8']."</th>
                       <th style='color:$t;'> ".$pos['subject8']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj9</th>
                        <th style='color:$t;'> ".$r['subject9']."</th>
                        <th style='color:$t;'> ".$re['subject9']."</th>
                       <th style='color:$t;'> ".$rest['subject9']."</th>
                       <th style='color:$t;'> ".$t['subject9']."</th>
                       <th style='color:$t;'> ".$gra['subject9']."</th>
                         <th style='color:$t;'> ".$pos['subject9']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj10</th>
                        <th style='color:$t;'> ".$r['subject10']."</th>
                        <th style='color:$t;'> ".$re['subject10']."</th>
                       <th style='color:$t;'> ".$rest['subject10']."</th>
                       <th style='color:$t;'> ".$t['subject10']."</th>
                       <th style='color:$t;'> ".$gra['subject10']."</th>
                         <th style='color:$t;'> ".$pos['subject10']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj11</th>
                      <th style='color:$t;'> ".$r['subject11']."</th>
                      <th style='color:$t;'> ".$re['subject11']."</th>
                     <th style='color:$t;'> ".$rest['subject11']."</th>
                     <th style='color:$t;'> ".$t['subject11']."</th>
                     <th style='color:$t;'> ".$gra['subject11']."</th>
                       <th style='color:$t;'> ".$pos['subject11']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj12</th>
                      <th style='color:$t;'> ".$r['subject12']."</th>
                      <th style='color:$t;'> ".$re['subject12']."</th>
                       <th style='color:$t;'> ".$rest['subject12']."</th>
                       <th style='color:$t;'> ".$t['subject12']."</th>
                       <th style='color:$t;'> ".$gra['subject12']."</th>
                       <th style='color:$t;'> ".$pos['subject12']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj13</th>
                      <th style='color:$t;'> ".$r['subject13']."</th>
                      <th style='color:$t;'> ".$re['subject13']."</th>
                     <th style='color:$t;'> ".$rest['subject13']."</th>
                     <th style='color:$t;'> ".$t['subject13']."</th>
                     <th style='color:$t;'> ".$gra['subject13']."</th>
                     <th style='color:$t;'> ".$pos['subject13']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj14</th>
                      <th style='color:$t;'> ".$r['subject14']."</th>
                      <th style='color:$t;'> ".$re['subject14']."</th>
                     <th style='color:$t;'> ".$rest['subject14']."</th>
                     <th style='color:$t;'> ".$t['subject14']."</th>
                     <th style='color:$t;'> ".$gra['subject14']."</th>
                   <th style='color:$t;'> ".$pos['subject14']."</th>
                        </tr>
                         <tr>
                        <th style='color:$t;'> $sbj15</th>
                      <th style='color:$t;'> ".$r['subject15']."</th>
                      <th style='color:$t;'> ".$re['subject15']."</th>
                       <th style='color:$t;'> ".$rest['subject15']."</th>
                       <th style='color:$t;'> ".$t['subject15']."</th>
                       <th style='color:$t;'> ".$gra['subject15']."</th>
                       <th style='color:$t;'> ".$pos['subject15']."</th>
                           </tr>
                      
                      <tbody>
                       
                        
                      </tbody>
                 ";
}
}
}
}             
}
}

echo "   </table>
                  </div>
                ";



                           //<JSSS CLASSESS 2ND TERM>


 
                            //<JSSS CLASSESS 3RD TERM>

 








 ?>
 


              </div>
            </div>
           </div>
           </div>
           </section>
     
        
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>
<?php
 } 
 else{
 include 'studentlogin.php';
 }
?>