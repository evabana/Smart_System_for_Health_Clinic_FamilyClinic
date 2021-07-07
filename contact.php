<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact us</title>
        <link rel="icon" href="images/logo.png">
		<link rel="stylesheet" href="css/css/style.css">
    <link rel="stylesheet" href="css/css/responsive.css">
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <link rel="stylesheet" href="css/css/themify-icons.css">
    <link rel="stylesheet" href="css/css/flaticon.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    

    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<body>
		<!--start-wrap-->
		
<header class="header_area">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <a class="dn_btn" href="mailto:FamilyClinic@gmail.com">&emsp;&emsp;<span class="fa fa-envelope"></span></>FamilyClinic@gmail.com</a>
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
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="images/logo4.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" 
                    data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=" navbar-collapse offset collapse show   " id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="event.php">Event</a></li> 
                            <li class="nav-item"><a class="nav-link" href="doctor.php">Doctor</a></li> 
                            <li class="nav-item"><a class="nav-link" href="contact.php">contact</a></li>    
                            
                            <li class="nav-item"><a class="nav-link" href="register.php">Signup</a></li>
                          
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
	<section class="banner_area" style="background-image: url(images/banner-2.jpg);" >
      <div class="banner_inner d-flex align-items-center" >
        <div class="container" >
          <div
          class="banner_content d-md-flex justify-content-between align-items-center " 
          >
          <div class="mb-3 mb-md-0">
              <h2>Contact Us</h2>
              <p>We replay to all our quries </p>
          </div>
          <!-- <div class="page_link">
              <a href="index.php">Home</a>
              <a href="contact.php">Contact Us</a>
          </div> -->
      </div>
  </div>
</div>

</section>
<br>
<br>
			<!--  -->
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					
      			<div class="company_address">
				     	<h2>&emsp;Family Clinic Address  :</h2>
						    	<p>&emsp;&emsp;&emsp;Dhapakhel, Lalitpur, Nepal</p>
						   		<p>&emsp;&emsp;&emsp;Phone:(+977) 9860047530</p>
				   				<p>&emsp;&emsp;&emsp;Fax: (000) 123 45 65 8</p>
				 	 			<p>&emsp;&emsp;&emsp;Email: <span>FamilyClinic@gmail.com</span></p>
								  <div class="mapouter"><div class="gmap_canvas"><iframe width="447" height="325" 
								  id="gmap_canvas" src="https://maps.google.com/maps?q=dhapakhel%20nepal&t=&z=13&ie=UTF8&iwloc=&output=embed" 
								  frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
								  </div></div>
				   	
				   </div>
				</div>	
				
				<div class="card">
  <div class="card-body">
  <div class="col span_3_of_3">
				  <div class="contact-form">

				  	<h2>Contact Us</h2>
					    <form name="contactus" method="post">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" name="fullname" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="email" name="emailid" required="ture" value=""></span>
						    </div>
						    <div>
						     	<span><label>MOBILE.NO</label></span>
						    	<span><input type="text" name="mobileno" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>Description</label></span>
						    	<span><textarea name="description" required="true"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="Submit"></span>
						  </div>
					    </form>
						
				    </div>
  				</div>
  </div>
</div>		



								
<br>
	<br>
	<?php
include('footer.php')
?>	 
			  	 
		   
		<!--end-wrap-->
	</body>
	
</html>

