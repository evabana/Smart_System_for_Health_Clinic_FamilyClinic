<?php
session_start();
error_reporting(0);
include("include/config.php");
//Checking Details for reset password
if(isset($_POST['submit'])){
$name=$_POST['fullname'];
$email=$_POST['email'];
$query=mysqli_query($con,"select id from  users where fullName='$name' and email='$email'");
$row=mysqli_num_rows($query);
if($row>0){

$_SESSION['name']=$name;
$_SESSION['email']=$email;
header('location:reset-password.php');
} else {
echo "<script>alert('Invalid details. Please try with valid details');</script>";
echo "<script>window.location.href ='forgot-password.php'</script>";


}

}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Pateint  Password Recovery</title>
		<link rel="icon" href="images/logo.png">

		<link rel="stylesheet" href="css/css/style.css">
		<link rel="stylesheet" href="css/css/responsive.css">
    <link rel="stylesheet" href="css/css/bootstrap.css">
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/responsiveslides.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
		</head>
	<body class="login">
	
<div class="header">
        <div class="wrap">
            <!--start-logo-->
			<div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <a class="dn_btn" href="mailto:FamilyClinic@gmail.com">&emsp;&emsp;&emsp;<span class="fa fa-envelope"></span></>FamilyClinic@gmail.com</a>
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
                    <!-- <div class="text-lg-right top-right-bar">
                    <span class="fa fa-phone"></span>
							<span>Call Now : </span>
							<span>01-5553303</span>
						</a>
					</div> -->
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
              <h2>Patient Password Recovery</h2>
              <p>Section for reseting your password if forgoten</p>
          </div>
          <div class="page_link">
              <!-- <a href="../index.php">Home</a>
              <a href="register.php">Sign-Up</a>
          </div> -->
      </div>
  </div>
</div>
</section>

        <!--end-header-->
    </div>
	<br>
<br>

	
        <!--end-header-->
		<div class="main-login col-xs-10  col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
		<div class="card text-center">
  <div class="card-header">
  <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active " href="register.php">Patient</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="doctor/">Doctor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="admin">Admin</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="index.php">Home</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
  
    <!-- <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->
	<div class="row">
			
				<div class="logo margin-top-30">
				<!-- <a href="index.php"><h2> Patient Password Recovery</h2></a> -->
				

				<div class="box-login">
					<form class="form-login" method="post">
						<fieldset>
							<!-- <legend>
								Patient Password Recovery
							</legend> -->
							<p>
								Please enter your Email and password to recover your password.<br />
					
							</p>

							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="text" class="form-control" name="fullname" placeholder="Registred Full Name">
									<i class="fa fa-lock"></i>
									 </span>
							</div>

							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" placeholder="Registred Email">
									<i class="fa fa-user"></i> </span>
							</div>

							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									Reset <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							<div class="new-account">
								Already have an account? 
								<a href="user-login.php">
									Log-in
								</a>
							</div>
						</fieldset>
					</form>

					<!-- <div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> FamilyClinic</span>. <span>All rights reserved</span>
					</div> -->
			
				</div>

			</div>
		</div>
		</div>
  </div>
  <div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase">Family Clinic</span>. <span>All rights reserved</span>
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