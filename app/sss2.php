<?php session_start();
if (isset($_SESSION['email'])) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ZEUS School Dashboard</title>
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
       <link rel="shortcut icon" href="images/graduate.png">
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center" style="background-color: #1d52ba;">
          <!-- User Info-->
         <div class="sidenav-header-inner text-center"><?php echo "<img src='".$_SESSION['schools_passport']."'  style='width:60px;height:60px;border-radius: 50%' >";?>
          
           <span></span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong>Z</strong><strong class="text-primary">S</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu" style="margin-top: 30px";>
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.php"> <i class="fa fa-home"></i>Home </a></li>  
          </ul>
        </div>
        <div class="admin-menu" style="margin-top: 30px";>
          <h5 class="sidenav-heading">Students Menu</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
           <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-user"></i>Students </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="studentreg.php">Register New Student</a></li>
                 <li><a href="jss1.php">JSS1 Students</a></li>
                 <li><a href="jss2.php">JSS2 Students</a></li>
                 <li><a href="jss3.php">JSS3 Students</a></li>
                 <li><a href="sss1.php">SSS1 Students</a></li>
                 <li><a href="sss2.php">SSS2 Students</a></li>
                 <li><a href="sss3.php">SSS3 Students</a></li>

               
              </ul>
            </li> 
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar" style="background-color: #1d52ba;">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header" ><a id="toggle-btn" href="#" class="menu-btn" style="background-color:white;color: #1d52ba"><i class="fa fa-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span> <h5 style="text-align:center"><?php echo $_SESSION['schools_name']; ?> </h5> </span><strong class="text-primary"> Dashboard(Admin-Staff)</strong></div></a></div>
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
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"> <?php echo "<img src='".$_SESSION['passpor']."'  style='width:40px;height:40px;border-radius: 50%' >";?></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 style="text-align:center"><?php echo $_SESSION['use']; ?> </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
           
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display" style='color:#1d52ba;'>All SSS2 Students</h1>
          </header>
         <div class="accrodion-regular">                
         <div id="accordion4">
      <div class="container">
      <div class="row">
         <div class="col-md-6">
          <div class="card bg-brand ">
          <div class="card-header" id="headingEleven">
        <h5 class="mb-0">
           <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
          <span class="fa fa-angle-down mr-3"></span>All SSS2 Students(List)</button>      
          </h5>
    </div>
     <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion4">
                                            <div class="card-body">
<?php 
require 'dc.php';
$result = mysqli_query($con, "select * from student_tb where class='SSS2'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
// <table border=10 width=50% align=center style='margin-top:100px;color: white;background-color:#166A8F;border-color:#166A8F'><th>S/N</th><th>Surname</th><th>Firstname</th><th>Lastname</th></th><th>Change</th><th>Delete</th><th>Info</th>
echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                         <tr style='color:#1d52ba;font-size:15px'>
                          <th>S/N</th>
                          <th>Surname</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Parents' PhoneNumber</th>
                          <th>Admission Date</th>
                          <th> Date</th>
                          <th>Time</th>
                    
                        </tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
while ($r = mysqli_fetch_array($result)) {
  $id = $r ['student_id'];
  $email= $r['email'];
  $classs=$r['class'];
  $_SESSION['entclass']=$classs;
  $_SESSION['emails']=$email;
  
  echo "<tr style='color:#1d52ba;font-size:13px'><td style='color:grey'>".$id."</td><td>".$r['surname']."</td><td>".$r['firstname']."</td><td>".$r['lastname']."</td><td>".$r['email']."</td><td>".$r['parentNumber']."</td><td>".$r['admissionDate']."</td><td>".$r['date']."</td><td>".$r['time']."</td><td>
  </tr>";

}
echo "   </table>
                
            </div>";

 ?>          </div>
</div>
</div>
</div>
  <div class="col-md-6">
          <div class="card bg-brand ">
          <div class="card-header" id="headingEleven">
        <h5 class="mb-0">
           <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
          <span class="fa fa-angle-down mr-3"></span>All SSS2 Students (Edit Info)</button>      
          </h5>
    </div>
     <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion4">
                                            <div class="card-body">   

<?php 
require 'dc.php';
$result = mysqli_query($con, "select * from student_tb where class='SSS2'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
// <table border=10 width=50% align=center style='margin-top:100px;color: white;background-color:#166A8F;border-color:#166A8F'><th>S/N</th><th>Surname</th><th>Firstname</th><th>Lastname</th></th><th>Change</th><th>Delete</th><th>Info</th>
echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                        <tr>
                         <tr style='color:#1d52ba;font_size:15px'>
                        <th> S/N</th>
                          <th> Edit Profile</th>
                           <th> Delete Profile</th>
                           <th> Edit Student Subject</th>
                          <th>Report Card</th>
                          <th>Total Result(%)</th>
                        </tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
while ($r = mysqli_fetch_array($result)) {
  $id = $r ['student_id'];
  $email= $r['email'];
  $classs=$r['class'];
  $_SESSION['entclass']=$classs;
  $_SESSION['emails']=$email;
  
  echo "<td>
  <a href='edit.php?id=$id'><input type='submit'name='edit data'value='Edit Profile'id='myBtn' class='add btn btn'  style='background:#1d52ba;color:white'/></a></td>"."</td><td>
    <a href='delete.php?id=$id'><input type='submit'name='edit data'value='Delete'id='myBtn' class='add btn btn'  style='background:#1d52ba;color:white'/></a></td>"."</td><td>
     <a href='seditsubject.php?id=$id'><input type='submit'name='edit data'value='Edit Student Subject'id='myBtn' class='add btn btn'  style='background:#1d52ba;color:white'/></a></td>"."</td><td>
  <a href='sreport.php?id=$id' ><input type='submit'name='delete data'value='Edit Report'id='myBtn' class='del btn btn'  style='background:#1d52ba;color:white'/></a></td>"."</td><td>
  <a href='stotal.php?id=$id' ><input type='submit'name='delete data'value='Total Result'id='myBtn' class='del btn btn'  style='background:#1d52ba;color:white'/></a></td><td>
   <a href='sgrade.php?id=$id' ><input type='submit'name='delete data'value='Edit Grade'id='myBtn' class='del btn btn' style='background:#1d52ba;color:white'/></a></td><td>
  <a href='sposition.php?id=$id' ><input type='submit'name='delete data'value='Edit Position'id='myBtn' class='del btn btn' style='background:#1d52ba;color:white'/></a></td>
  <td> <a href='nexts.php?id=$id' ><input type='submit'name='delete data'value='View Result'id='myBtn' class='del btn btn'  style='background:#1d52ba;color:white'/></a></td>
  </tr>";;

}
echo "   </table>
                
            </div>";

 ?>          </div>
             </div>
         </div>
         </div>
      </div>
      </div>
    </div>
  </div>
      </section>
      <footer class="main-footer" style="background:#1d52ba;;color:white">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p style="color:white">ZEUS School &copy; 2017-2019</p>
            </div>
            <div class="col-sm-6 text-right">
              <p style="color:white">Powered by <a href="#" class="external">VAD</a></p>
            
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
 include 'schools_admin_staff_master_login.php';
 }
?>