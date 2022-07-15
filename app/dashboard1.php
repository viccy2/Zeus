<?php session_start();
if (isset($_SESSION['emails'])) {
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
  </head>
  <body>

    <!-- Side Navbar -->
    <nav class="side-navbar" style="background-color: <?php echo $_SESSION['color']?>">
      <div class="side-navbar-wrapper" >
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center" style="background-color:<?php echo $_SESSION['color']?> ;">
         <div class="sidenav-header-inner text-center" style="background-color:<?php echo $_SESSION['color']?>;"><img src="image/lerennn.png" alt="" class="img-fluid rounded-circle">
           <?php echo "<img src='".$_SESSION['schools_passport']."'  style='width:60px;height:60px;border-radius: 50%' >";?>
            <h2 class="h5"><?php echo $_SESSION['user']; ?></h2><span style="color:white"><?php echo $_SESSION['users']; ?></span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo" ><a href="index.php" class="brand-small text-center"></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu" >
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="#"> <i class="fa fa-home"></i>Home </a></li>
            <li><a href="schoolfees.php"> <i class="fa fa-bar-chart"></i>School Fees </a></li> 
          <div class="admin-menu">
          <h5 class="sidenav-heading">Students Menu</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
           <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-book"></i>Student's Results </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                 <li><a href="first_term.php">First Term</a></li>
                 <li><a href="second_term.php">Second Term</a></li>
                 <li><a href="third_term.php">Third Term</a></li>


               
              </ul>
            </li> 
          </ul>
        </div> 
             <li><a href="set.php"> <i class="fa fa-eye"></i>Change Password </a></li> 
              <li><a href="photo.php"> <i class="fa fa-photo"></i>Change Display Picture </a></li> 
               <li><a href="color.php"> <i class="fa fa-photo"></i>Change Theme </a></li>
          </ul>
        </div>
        
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar" style="background-color:<?php echo $_SESSION['color']?>;">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between" >
              <div class="navbar-header" ><a id="toggle-btn" href="#" class="menu-btn" style="background-color:white;color:<?php echo $_SESSION['color']?>"><i class="fa fa-bars "> </i></a><a href="#" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span><?php echo $_SESSION['schools_name']; ?> </span><strong class="text-primary" style="color:white;">Dashboard  (Student)</strong></div></a></div>
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
            <li class="breadcrumb-item" style="color:<?php echo $_SESSION['color']?>"><a href="#">Home</a></li>
            
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Profile          </h1>
          </header>
          <div class="row">
            <div class="" style="width:100%;">
              <div class="card">
              <center>
<?php 
require 'dc.php';
$t = $_SESSION['color'];
   echo "<img src='".$_SESSION['passport']."' style='width:100px;height:100px;border-radius: 50%' >";


  echo "
                  <div class='table-responsive' style='margin-top:30px'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                         
                          
                          <th style='color:$t;'>Surname</th>
                            <th style='color:$t;'>Firstname</th>
                              <th style='color:$t;'>Lastname</th>

                          <th style='color:$t; float'>Email</th>
                           <th style='color:$t; float'>Password</th>

                        </tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
   require 'dc.php';
$resul = mysqli_query($con, "select * from student_tb  where email = '$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
while ($b = mysqli_fetch_array($resul)) {
  $id = $b ['student_id'];
  echo "<tr style='color:$t;'><td>".$b['surname']."</td><td>".$b['firstname']."</td><td>".$b['lastname']."</td><td>".$b['email']."</td><td>{Secured}</td></tr>";

}
echo "   </table>
";

 
       






 ?>

              </div>
            </div>
           
      </section>
      <footer class="main-footer" style="background:<?php echo $_SESSION['color']?>;color:white">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p style="color:white">ZEUS School &copy; 2017-2019</p>
            </div>
            <div class="col-sm-6 text-right">
              <p style="color:white">Design by <a href="#" class="external">VAD</a></p>
             
            </div>
          </div>
        </div>
      </footer>
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
 include 'studentlogin.html';
 }
?>