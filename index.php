<?php
  @include('header.php')
?>

     <!--Slider-->

     <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
   <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>

 <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner3.png" class="d-block w-100" alt="first slide">
      <div class="carousel-caption d-none d-md-block" >
          
      </div>
      </div>

    <!--2 Slider-->
    <div class="carousel-item">
      <img src="images/banner1.png" class="d-block w-100" alt="secound slide">
       
      </div>

    <!--3 Slider-->
    <div class="carousel-item">
      <img src="images/banner2.png" class="d-block w-100" alt="secound slide">
       
      </div>


 </div>

  <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>

<section class="feature-section">
<div style="background: url(images/pattern_bg.jpg) no-repeat center; background-size: cover; padding: 60px 0;">
            <div class="container">
                
                <div class="row">
                
                    <div class="col-md-4">
                        
                        <div class="card card-feature text-center text-lg-left">

                            <h3 class="card-feature__title"><span class="card-feature__icon">
                                <span class=" fa-2x fa  fa-ambulance" style="color:green">
                            <i ></i>
                            </span>Emergency Care</h3>
                            <p class="card-feature__subtitle">In case of Emergency this is the right place your are looking providing fast test report and catering patients need</p>
                            <a class="card-service__link" href="contact.php">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-feature text-center text-lg-left">

                            <h3 class="card-feature__title"><span class="card-feature__icon">
                                <span class="fa-2x fa fa-clock-o" style="color:green">
                            <i ></i>
                            </span>Woring Hours</h3>
                            <ul class="w-hours list-unstyled">
		                    <li class="d-flex justify-content-between">Mon - Wed : <span>9:00am - 8:00pm</span></li>
		                    <li class="d-flex justify-content-between">Thu - Fri : <span>10:00am - 8:00pm</span></li>
		                    <li class="d-flex justify-content-between">Sat - sun : <span>10:00am - 9:00pm</span></li>
                            
		                </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-feature text-center text-lg-left">

                            <h3 class="card-feature__title"><span class="card-feature__icon">
                                <span class="fa-2x fa fa-hospital-o" style="color:green">
                                <i ></i>
                            </span>Online Appointment</h3></span>
                            <!-- <p class="card-feature__subtitle">Now booking an appointment is just a click away so sign up as patient on the button below and start
                                booking appointments straight away </p> -->
                                <p class="card-feature__subtitle">Now booking an appointment is just an click away. Just sign up or click on the button below and get started</p>
                                
                                <a class="card-service__link" href="register.php">Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
</div>
    </section>
    <!-- health services open -->
    <div class="service-area area-padding-top">
        <div class="container">
            <div class="area-heading row">
                <div class="col-md-5 col-xl-4">
                    <h3>Awesome<br>
                    Health Service</h3>
                </div>
                <div class="col-md-7 col-xl-8">
                    <!-- <p>Land meat winged called subdue without very light in all years sea appear midst forth image him third there set. Land meat winged called subdue without very light in all years sea appear</p> -->
                    <p>With our diverse team of skilled medical professionals, we are pleased to offer a wide range of services to our patients. Family Clinic pride ourselves on providing personalised, professional, quality healthcare. </p>


                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span class="card-service__icon">
                        <span class="fa-3x fa fa-flask" style="color:green" ></span>
                        </span>
                        <h3 class="card-service__title">Neurology Service</h3>
                        <p class="card-service__subtitle">We provide Neurologists with highly trained and capable of diagnosing complex conditions through detailed history and physical examination, including testing of mental status,sensation and coordination</p>
                        <a class="card-service__link" href="#">Learn More</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span class="card-service__icon">
                            <!-- <i class="flaticon-tooth"></i> -->
                            <!-- <i class="fas fa-tooth"></i> -->
                            <span class="fa-3x fa fa-heartbeat"  style="color:green"></span>
                            
                        </span>
                        <h3 class="card-service__title">Dental Clinic</h3>
                        <p class="card-service__subtitle">We provide Dentist with highly trained with the modern technology and equipment like X-ray machines, lasers, drills, brushes, scalpels, and other medical tools when performing dental procedures.</p>
                        <a class="card-service__link" href="#">Learn More</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span class="card-service__icon">
                        <span class="fa-3x fa fa-hospital-o" style="color:green"></span>
                        </span>
                        <h3 class="card-service__title">Diagnosis Care </h3>
                        <p class="card-service__subtitle">We provide you with the best Diagnosis personals and equipments to finding out a specific disease. A medical professional prescribes a test to make a diagnosis or to exclude possible illness. </p>
                        <a class="card-service__link" href="#">Learn More</a>
                    </div>
                </div>


            </div>
        </div>
    </div>  
    <!-- health services close -->
    <!-- <div class="service-area area-padding-top">
        <div class="container">
    <div class="area-heading row">
                <div class="col-md-5 col-xl-4">
                    <h3>Awesome<br>
                    Health Service</h3>
                </div>
                <div class="col-md-7 col-xl-8">
                    <p>Land meat winged called subdue without very light in all years sea appear midst forth image him third there set. Land meat winged called subdue without very light in all years sea appear</p>
                </div>
            </div>
            </div>
            </div> -->
<br>
<br>
            <div class="jumbotron container-fluid" style="background-image: url(images/banner-2.jpg);">

  <div class="row" >
              <div class="col-md-1">
            
        </div>
               <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5" style="color: white;background-color:#00a400 ">
                        <h2 style="font-family: 'El Messiri', sans-serif; font-size: 20px;"> Special Events </h2>
                <p class="lead" style="font-family: 'El Messiri', sans-serif; font-size: 20px;"> Visit Our clinic to get vacinated for free for everyone  </p>
                <div class="row text-center">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 "  style="background-color: #3391E7;">
                       <div class="row"><div class="col-md-12"><h2 style="font-family: 'El Messiri', sans-serif; font-size: 20px;">Event Date</h2></div></div>
                       <div class="row text-center"  ><div class="col-md-12" id="demo" style="font-size: 1.5em;"></div></div>
                    </div>
                </div>
            </div>
</div>

</div>



<!--Slider close-->

    <!--================ Team section start =================-->  
    <section class="team-area area-padding">
        <div class="container">
            <div class="area-heading row">
                <div class="col-md-5 col-xl-4">
                    <h3>Family Clinic<br>
                    Experience Doctors</h3>
                </div>
                <div class="col-md-7 col-xl-8">
                    <p>Our top doctors in downtown get amazing reviews because our patients achieve optimal results. We provide concierge medical care, mental health care, and treatment of addictions and complex conditions. Contact us for information or to schedule an appointment.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-team">
                        <img class="card-img rounded-0" src="images/doctor4.png" alt="">
                        <div class="card-team__body text-center">
                            <h3>Dr Eva Shakya </h3>
                            <p>Homeopath</p>
                            <div class="team-footer d-flex justify-content-between">
                                <a class="dn_btn" href=""><i class="fa fa-phone"></i>+977 9876567789</a>
                                <ul class="card-team__social">
                                    <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="www.skype.com"><i class="fa fa-skype"></i></a></li>
                                </ul> 
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-team">
                        <img class="card-img rounded-0" src="images/2.jpg" alt="">
                        <div class="card-team__body text-center">
                            <h3><a href="#">Dr Sunil Shakya</a></h3>
                            <p>Dermatologist</p>
                            <div class="team-footer d-flex justify-content-between">
                                <a class="dn_btn" href=""><i class="fa fa-phone"></i>+977 9878987765</a>
                                <ul class="card-team__social">
                                    <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="www.skype.com"><i class="fa fa-skype"></i></a></li>
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-team">
                        <img class="card-img rounded-0" src="images/3.jpg" alt="">
                        <div class="card-team__body text-center">
                            <h3><a href="#">Dr Suman Thapa</a></h3>
                            <p>Gynecologist/Obstetrician</p>
                            <div class="team-footer d-flex justify-content-between">
                                <a class="dn_btn" href=""><i class="fa fa-phone"></i>+977 9845334456</a>
                                <ul class="card-team__social">
                                    <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="www.skype.com"><i class="fa fa-skype"></i></a></li>
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br>
<br>

        <!-- ================ Hotline Area Starts ================= -->  
        <section class="hotline-area text-center area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Emergency hotline</h2>
                        <span>(+01) 5553303</span>
                        <p class="pt-3">We provide 24/7 customer support. Please feel free to contact us <br>for emergency case.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ Hotline Area End ================= --> 


<!-- ================ testimonial section start ================= -->      
<section class="testimonial">
    <div class="container">
        <div class="testi_slider owl-carousel owl-theme">
            <div class="item">
                <div class="testi_item">
                    <div class="testimonial_image">
                        <img src="images/test1.jpg" alt="">
                    </div>
                    <div class="testi_item_content">
                        <p>
                            “Family Clinic serves you with the highly experience doctor and with the modern technology and equipment like X-ray machines etc ”
                        </p>
                        <h4>- Dr. Sunil Shakya -</h4>       
                    </div>
                </div>
            </div>
          
           
        </div>
    </div>
</section>
<!-- ================ testimonial section end ================= -->   


<!--Slider close-->
<?php
include('footer.php')
?>


<script>
    //countdown ko date setting
    var countDownData = new Date("Sep 31, 2021 10:00:00").getTime();
    //update countdown every 1 sec
    var countDownFunction = setInterval(function() {
        //today's date and time
    var now = new Date().getTime();
    //countdown ko distance
    var distance = countDownData-now;
    //time calculation
    var days = Math.floor(distance / (1000 * 60 * 60 *24));
    var hours = Math.floor((distance % (1000 * 60 * 60 *24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / (1000));

    //output result in an element with id="demo"
    document.getElementById("demo").innerHTML =  days + "d " +": " + hours + "h " +": " + minutes + "m " +": " + seconds + "s ";
    //countdown sake paxi
    if (distance < 0) {
        clearInterval(countDownFunction);
        document.getElementById("demo").innerHTML = "Expired";
    }

    }, 1000);
</script>

</body>
</html>