<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit']))
{
$ret=mysqli_query($con,"SELECT * FROM users WHERE email='".$_POST['username']."' and password='".md5($_POST['password'])."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard.php";//
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
// For stroing log if user login successfull
$log=mysqli_query($con,"insert into userlog(uid,username,userip,status) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','$status')");
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
	// For stroing log if user login unsuccessfull
$_SESSION['login']=$_POST['username'];	
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
mysqli_query($con,"insert into userlog(username,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$_SESSION['errmsg']="Invalid username or password";
$extra="user-login.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User-Login</title>
		<link rel="icon" href="images/logo.png">
		<link rel="stylesheet" href="css/css/style.css">
		<link rel="stylesheet" href="css/css/responsive.css">
    <link rel="stylesheet" href="css/css/bootstrap.css">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
	</head>
	<body>
	<div class="header">
        <div class="wrap">
            <!--start-logo-->
			<div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <a class="dn_btn" href="mailto:FamilyClinic@gmail.com"><span class="fa fa-envelope"></span></>FamilyClinic@gmail.com</a>
                    <span class="dn_btn"> <span class="fa fa-map-marker"></span></i>Find our Location</span>
                </div>
                <div class="float-right">
                    <!-- <ul class="list header_social">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        <li><a href="#"><i class="ti-skype"></i></a></li>
                        <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                    </ul>	 -->
                    <div class="text-lg-right top-right-bar">
                    <span class="fa fa-phone"></span>
							<span>Call Now : </span>
							<span>01-5553303</span>
						</a>
					</div>
                </div>
            </div>	
        </div>
            <!--end-logo-->
            <!--start-top-nav-->
           
            <div class="clear"> </div>
            <!--end-top-nav-->
        </div>
		
<section class="banner_area" style="background-image: url(images/banner-2.jpg);" >
      <div class="banner_inner d-flex align-items-center" >
        <div class="container" >
          <div
          class="banner_content d-md-flex justify-content-between align-items-center " 
          >
          <div class="mb-3 mb-md-0">
              <h2>Login As User</h2>
              <p>Login to Book the appointment to doctor</p>
          </div>
         
      </div>
  </div>
</div>
</section>

        <!--end-header-->
    </div>
	<br>
<br>

	<div class="header">
        <div class="wrap">
            <!--start-logo-->
            <!-- <div class="logo">
            <img src="images/logo4.png" alt="">
                <a href="index.php" style="font-size: 30px;">Family  Clinic</a> 
                
            </div> -->
            <!--end-logo-->
            <!--start-top-nav-->
            <!-- <div class="top-nav">
                <ul>
                    <li ><a href="index.php">Home</a></li>
                    <li><a href="">Event</a></li>

                    <li><a href="contact.php">contact</a></li>
                    <li class="active"><a href="register.php">Signup</a></li>
                </ul>
            </div> -->
            <div class="clear"> </div>
            <!--end-top-nav-->
        </div>
        <!--end-header-->
    </div>
	<div class="main-login col-xs-10  col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
	<div class="card text-center">
  <div class="card-header">
  <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="register.php">Patient</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="doctor/">Doctor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin">Admin</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
    </ul>
  
  <div class="card-body">
    <!-- <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->
	<div class="row">
			<!-- <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="index.php"><h2>Patient Login</h2></a>
				</div> -->

				<div class="box-login">
					<form class="form-login" method="post">
						<fieldset>
							<legend>
								Sign in to your account
							</legend>
							<p>
								Please enter your name and password to log in.<br>
								<br>
								<span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Username">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password">
									<i class="fa fa-lock"></i>
									 </span>
									 <br><a href="forgot-password.php">
									Forgot Password ?
								</a>
							</div>
							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							<div class="new-account">
								Don't have an account yet?
								<a href="register.php">
									Create an account
								</a>
							</div>
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> Family Clinic</span>. <span>All rights reserved</span>
					</div>
			
				</div>

			</div>
		</div>
  </div>
</div>
</div>
		
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	
		<script src="assets/js/main.js"></script>

		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	
	</body>
	<!-- end: BODY -->
</html>